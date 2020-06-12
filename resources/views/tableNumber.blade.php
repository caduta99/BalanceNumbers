<!DOCTYPE html>
<html>
<head>
    <title>
        Balance Numbers
    </title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        a {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Grupo</th>
            <th>Números</th>
        </tr>
        @foreach ($groups as $key => $group)
            <tr>
                <th>{{ $key }}</th>
                <th>{{ $group }} </th>
            </tr>    
        @endforeach
    </table>
    <br>
    <br>
    <center>
        <a href="/">Voltar</a>
    </center>
</body>
</html>