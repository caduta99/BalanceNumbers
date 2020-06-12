<html>
    <title>Balance Numbers</title>
    <style>
        input[type=text], input[type=number]{
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit], button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover, button {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        button{
            margin: 2px 2px 2px 2px;
        }
    </style>
</html>
<body>
    <div class="container">
        <form action="{{ route('generate') }}" method="POST">
        @csrf
      
        <label for="numberGroup">Em quantos grupos será feita divisão?</label>
        <input type="number" id="numberGroup" name="numberGroup" min="2" max="10" required>
        <br>
        <label for="number">Números</label>
        <br>
        <br>
        <button class="btnAddNumber">Adicionar número</button>

        <center>
            <input type="submit" value="Enviar">
        </center>
    
        </form>
    </div>    

    <script>
        document
        .querySelector('.btnAddNumber')
        .addEventListener('click', function(e){ 
            e.preventDefault();

            var divNumber = document.createElement('div');

            var inputNumber = document.createElement('input');
            inputNumber.setAttribute('name', 'number[]');
            inputNumber.setAttribute('type', 'number');
            inputNumber.setAttribute('required', 'required');

            var btnRemoveNumber = document.createElement('button');
            btnRemoveNumber.setAttribute('class', 'btnRemoveNumber');
            btnRemoveNumber.innerHTML = 'Excluir';

            divNumber.appendChild(inputNumber);
            divNumber.appendChild(btnRemoveNumber);

            this.after(divNumber);

            removeNumber();
        });

        function removeNumber(){
            document
            .querySelector('.btnRemoveNumber')
            .addEventListener('click', function(e){ 
                e.preventDefault();

                this.parentElement.remove();
            });
        }
    </script>
</body>