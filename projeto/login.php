
<!DOCTYPE html>
<html lang="en">
<head>
   
    <script src="script.js" defer></script>
    <img src="./img/estacio-logo.png" alt="Logo da Estácio">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tela de Login</title>
    <style>
        
    
        div  {
            background-color: rgba(0, 0, 0, 0.8); 
            color: rgb(0, 0, 0);
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color:white;
            


        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, blue);
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
        }
        

    </style>    
</head> 
<body>
    <form class= "form-signin" action="logar.php" method="POST">
    <div class="tela-login">
        <h1>Login(adm)</h1>
        <input type="text" name="nome" placeholder="nome">
        <br><br>
        <input type="senha" name="senha" placeholder="senha">
        <br><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </div>
    </form>
</body>
</html>