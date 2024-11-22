

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização Automática</title>
    <script>
        setTimeout(function() {
            location.reload();
        }, 5000);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <img src="./img/estacio-logo.png" alt="Logo da Estácio">
    <title>Quadro de Aulas</title>
    <script>
        function fetchAgendamentos() {
            fetch('fetch_agendamentos.php')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('agendamentos-table-body');
                    tableBody.innerHTML = ''; 

                    data.forEach(item => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${item.id}</td>
                            <td>${item.sala}</td>
                            <td>${item.data}</td>
                            <td>${item.horario_inicio}</td>
                            <td>${item.horario_fim}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => console.error('Erro ao buscar agendamentos:', error));
        }

        setInterval(fetchAgendamentos, 5000);
    </script>
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
                <strong> <a class="nav-link active" aria-current="page" href="index.php">Salas</a></strong>
            </li>
            <li class="nav-item">
      <div class="texto-cabeçalho">
                <strong><a class="nav-link" href="Agendar.php">Agendar</a></strong>
            </li>
            <li class="nav-item">
      <div class="texto-cabeçalho">
                <strong><a class="nav-link" href="login.html">Entrar</a></strong> 
            </div>
              
  </header> 
    <div class="texto-sobre">
        <h1>Quadro de Aulas</h1>
    </div>

    <div class="container" id="table-container">
        <div class="table-container">
            <h2>Quadro 1</h2>
            <table>
                <tr>
                    <th>Sala</th>
                    <th>Aula</th>
                    <th>Horário</th>
                    <th>Professor</th>
                </tr>
                <tr>
                    <td>101</td>
                    <td>Matemática</td>
                    <td>08:00 - 10:00</td>
                    <td>Prof. João</td>
                </tr>
            </table>
        </div>
      <div class="table-container">
          <h2>Quadro 2</h2>
          <table>
            <tr>
              <th>Sala</th>
              <th>Aula</th>
              <th>Horário</th>
              <th>Professor</th>
            </tr>
            <tr>
              <td>102</td>
              <td>Física</td>
              <td>10:00 - 12:00</td>
              <td>Prof. Maria</td>
            </tr>
          </table>
      </div>
      
      <div class="table-container">
          <h2>Quadro 3</h2>
          <table>
            <tr>
              <th>Sala</th>
              <th>Aula</th>
              <th>Horário</th>
              <th>Professor</th>
            </tr>
            <tr>
              <td>103</td>
              <td>Química</td>
              <td>14:00 - 16:00</td>
              <td>Prof. Ana</td>
            </tr>
          </table>
      </div>
      

      <div class="table-container">
          <h2>Quadro 4</h2>
          <table>
            <tr>
              <th>Sala</th>
              <th>Aula</th>
              <th>Horário</th>
              <th>Professor</th>
            </tr>
            <tr>
              <td>104</td>
              <td>Biologia</td>
              <td>16:00 - 18:00</td>
              <td>Prof. Carlos</td>
            </tr>
          </table>
      </div>

      <div class="table-container">
          <h2>Quadro 5</h2>
          <table>
            <tr>
              <th>Sala</th>
              <th>Aula</th>
              <th>Horário</th>
              <th>Professor</th>
            </tr>
            <tr>
              <td>201</td>
              <td>História</td>
              <td>08:00 - 10:00</td>
              <td>Prof. Fernanda</td>
            </tr>
          </table>
      </div>
      
      <div class="table-container">
          <h2>Quadro 6</h2>
          <table>
            <tr>
              <th>Sala</th>
              <th>Aula</th>
              <th>Horário</th>
              <th>Professor</th>
            </tr>
            <tr>
              <td>202</td>
              <td>Geografia</td>
              <td>10:00 - 12:00</td>
              <td>Prof. Ricardo</td>
            </tr>
          </table>
      </div>
      
      <div class="table-container">
          <h2>Quadro 7</h2>
          <table>
            <tr>
              <th>Sala</th>
              <th>Aula</th>
              <th>Horário</th>
              <th>Professor</th>
            </tr>
            <tr>
              <td>203</td>
              <td>Literatura</td>
              <td>14:00 - 16:00</td>
              <td>Prof. Clara</td>
            </tr>
          </table>
      </div>
      

      <div class="table-container">
          <h2>Quadro 8</h2>
          <table>
            <tr>
              <th>Sala</th>
              <th>Aula</th>
              <th>Horário</th>
              <th>Professor</th>
            </tr>
            <tr>
              <td>204</td>
              <td>Filosofia</td>
              <td>16:00 - 18:00</td>
              <td>Prof. Gabriel</td>
            </tr>
          </table>
      </div>
      </div>
      </div>
      </div>
      
       </body>
      