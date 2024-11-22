<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <title>Quadro de Aulas</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
        <div class="texto-cabeçalho">
                            <strong><a class="nav-link active" aria-current="page" href="index.php">Salas</a></strong>
        </div>
                    </li>
                    <li class="nav-item">
        <div class="texto-cabeçalho">
                            <strong><a class="nav-link" href="Agendar.php">Agendar</a></strong>
        </div>
                    </li>
                    <li class="nav-item">
        <div class="texto-cabeçalho">
                            <strong><a class="nav-link" href="login.php">Entrar</a></strong>
        </div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
</header>


<div class="texto-sobre">
    <h1>Painel de Salas</h1>
</div>

<div class="container" id="table-container">

      
    <div class="table-container">
        <h2>Quadro 1</h2>
        <form action="update_quadro.php" method="POST">
            <table class="table">
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td><input type="text" name="sala" value="101" required></td>
                    <td><input type="text" name="aula" value="Matemática" required></td>
                    <td><input type="text" name="horario" value="08:00 - 10:00" required></td>
                    <td><input type="text" name="professor" value="Prof. João" required></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="1"> 
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
    <div class="table-container">

    <div class="table-container">
        <h2>Quadro 2</h2>
        <form action="update_quadro.php" method="POST">
            <table class="table">
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td><input type="text" name="sala" value="101" required></td>
                    <td><input type="text" name="aula" value="Matemática" required></td>
                    <td><input type="text" name="horario" value="08:00 - 10:00" required></td>
                    <td><input type="text" name="professor" value="Prof. João" required></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="2"> 
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
       
    <div class="table-container">
        <h2>Quadro 3</h2>
        <form action="update_quadro.php" method="POST">
            <table class="table">
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td><input type="text" name="sala" value="101" required></td>
                    <td><input type="text" name="aula" value="Matemática" required></td>
                    <td><input type="text" name="horario" value="08:00 - 10:00" required></td>
                    <td><input type="text" name="professor" value="Prof. João" required></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="3"> 
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
      
    <div class="table-container">
        <h2>Quadro 4</h2>
        <form action="update_quadro.php" method="POST">
            <table class="table">
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td><input type="text" name="sala" value="101" required></td>
                    <td><input type="text" name="aula" value="Matemática" required></td>
                    <td><input type="text" name="horario" value="08:00 - 10:00" required></td>
                    <td><input type="text" name="professor" value="Prof. João" required></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="4"> 
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
         
    <div class="table-container">
        <h2>Quadro 5</h2>
        <form action="update_quadro.php" method="POST">
            <table class="table">
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td><input type="text" name="sala" value="101" required></td>
                    <td><input type="text" name="aula" value="Matemática" required></td>
                    <td><input type="text" name="horario" value="08:00 - 10:00" required></td>
                    <td><input type="text" name="professor" value="Prof. João" required></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="5"> 
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

    <div class="table-container">
        <h2>Quadro 6</h2>
        <form action="update_quadro.php" method="POST">
            <table class="table">
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td><input type="text" name="sala" value="101" required></td>
                    <td><input type="text" name="aula" value="Matemática" required></td>
                    <td><input type="text" name="horario" value="08:00 - 10:00" required></td>
                    <td><input type="text" name="professor" value="Prof. João" required></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="6">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
      
    <div class="table-container">
        <h2>Quadro 7</h2>
        <form action="update_quadro.php" method="POST">
            <table class="table">
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td><input type="text" name="sala" value="101" required></td>
                    <td><input type="text" name="aula" value="Matemática" required></td>
                    <td><input type="text" name="horario" value="08:00 - 10:00" required></td>
                    <td><input type="text" name="professor" value="Prof. João" required></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="7"> 
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
       
    <div class="table-container">
        <h2>Quadro 8</h2>
        <form action="update_quadro.php" method="POST">
            <table class="table">
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td><input type="text" name="sala" value="101" required></td>
                    <td><input type="text" name="aula" value="Matemática" required></td>
                    <td><input type="text" name="horario" value="08:00 - 10:00" required></td>
                    <td><input type="text" name="professor" value="Prof. João" required></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="8"> <!-- ID do quadro -->
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
      </div>
      </div>
      
       </body>
      