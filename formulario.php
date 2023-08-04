<?php
    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['telefone']);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220),rgb(17,54,71)) ;

        }
        .box{
            position: absolute;
            top :50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.6);
            padding: 15px;
            border-radius: 15px;
            width: 10%;
            min-width:320px ;
            max-width:800px ;
            color: white;

          
        }
        fieldset{
            border: 3px solid dodgerblue;
        }

        legend{
            border:1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px; /*espaços entre caracteres*/

        }
        .LabelInput{
            position: absolute;/*fazer animação*/
            top:0px;
            left:0px;
            pointer-events: none;
            transition: .5s; /*ainda não executa nenhuma ação*/
        
        }
        .inputUser:focus ~ .LabelInput, .inputUser:valid ~ .LabelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        
        #data_nascimento{
            border:none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 12px;
        }

        #submit{
            background-image: linear-gradient(to right, rgb(0,92,197),rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 10px;
            color: white;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class = "box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend> <b> Formulario de clientes</b> </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name ="name" id="name" class="inputUser" required>
                    <label for="name" class="LabelInput"> Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name ="email" id="email" class="inputUser" required>
                    <label for="email" class="LabelInput"> Email</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name ="phone" id="phone" class="inputUser" required>
                    <label for="phone" class="LabelInput"> Telefone </label>
                </div>
                <br>


                <p>Sexo:</p>
                <input type="radio" name ="genero" value="feminino" required>
                <label for="feminino">Feminino</label>

                <input type="radio" name ="genero" value="masculino" required>
                <label for="masculino">Masculino</label>

                
                <input type="radio" name ="genero" value="outro" required>
                <label for="outro">Outro</label>

                <br><br>

                    <label for="data_nascimento"><b> Data de Nascimento: </b> </label>
                    <input type="date" name ="data_nascimento" id="data_nascimento" required>
                 
                <br><br>

                <div class="inputBox">
                    <input type="text" name ="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="LabelInput"> Cidade</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name ="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="LabelInput"> Estado </label>
                </div>
                <br><br>


                <div class="inputBox">
                    <input type="text" name ="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="LabelInput"> Endereco</label>
                </div>

                <br>

              
                <input type="submit" name ="submit" id="submit">

            </fieldset>

        </form>
    </div>
</body>
</html>