


<!DOCTYPE html>
<html lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<link rel="stylesheet" href="agendar.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <img src="./img/estacio-logo.png" alt="Logo da Estácio">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
</head>
<body>
    <title>Agendar Aula</title>
    

    
    <style>
        
        div  {
            background-color: rgba(0, 0, 0, 0.8); /* Fundo preto semitransparente */
            color: rgb(0, 0, 0);
            position:absolute;
            text-align: center;
            top: 50%;
            left: 50%;
            line-height: 1.7;
            word-spacing: 0.1em;
            transform: translate(-50%,-50%);
            padding: 120px;
            border-radius: 15px;
            color:white;
             }

             button{
            background-color: dodgerblue;
            border: none;
            padding: 20px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 22px;
            margin-top: 110
        }

        h1{
            font-size: 40px
        }

        label{
            font-size: 22px
        }
        
    </style>      
    <button onclick="history.back()" class="botao-voltar">Voltar</button>
    
    <style>
        .Agendar-Aula h1 {
            
            position: relative; 
            top: -2px;
        }
    </style>

    <div class="Agendar-Aula">
    <h1>Agendar Aula</h1>
    
    <form method="POST">
        <label for="sala">Sala:</label>
        <input type="text" name="sala" id="sala"><br><br>

        <label for="dia_da_semana">Data:</label>
        <input type="text" name="dia_da_semana" id="dia_da_semana"><br><br>

        <label for="horario_inicio">Horário de Início:</label>
        <input type="time" name="horario_inicio" id="horario_inicio"><br><br>

        <label for="horario_fim">Horário de Fim:</label>
        <input type="time" name="horario_fim" id="horario_fim"><br><br>

        <button type="submit">Agendar</button>
    </form>
</div>
    </form>
</body>
</html>
