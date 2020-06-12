<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showForm(){
        return view('form');
    }

    public function generateGroup(Request $request){
        $numberGroup = $request->get('numberGroup');
        $numbers = $request->get('number');
        $groups = array();
        $isMax = true;

        if(!is_int(count($numbers)/intval($numberGroup)))
            dd('A divisão não será exata.');

        while (count($numbers) > 0) {
            for ($i = 1; $i <= $numberGroup; $i++) {
                $groups[$i] = $groups[$i] ?? array();
                array_push($groups[$i], $isMax ? max($numbers) : min($numbers));
    
                foreach ($numbers as $key => $number) {
                    if($number == ($isMax ? max($numbers) : min($numbers))){
                        unset($numbers[$key]);
                        break;
                    }
                }
            }

            $isMax = false;
        }

        foreach ($groups as $key => $group) {
            $groups[$key] = implode(', ', $group);
        }

        return view('tableNumber', compact('groups'));
    }
}