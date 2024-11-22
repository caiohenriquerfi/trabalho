<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "agendamentos"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sala = $_POST['sala'];
    $dia_da_semana = $_POST['dia_da_semana'];
    $horario_inicio = $_POST['horario_inicio'];
    $horario_fim = $_POST['horario_fim'];

    $stmt = $conn->prepare("INSERT INTO agendamentos (sala, dia_da_semana, horario_inicio, horario_fim) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $sala, $dia_da_semana, $horario_inicio, $horario_fim);

    if ($stmt->execute()) {
        echo "Agendamento realizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>