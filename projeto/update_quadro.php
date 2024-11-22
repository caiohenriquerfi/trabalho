<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "quadrosalas";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$id = $_POST['id'];
$sala = $_POST['sala'];
$aula = $_POST['aula'];
$horario = $_POST['horario'];
$professor = $_POST['professor'];

$sql = "UPDATE quadros SET sala=?, aula=?, horario=?, professor=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $sala, $aula, $horario, $professor, $id);

if ($stmt->execute()) {
    echo "Registro atualizado com sucesso.";
} else {
    echo "Erro ao atualizar registro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>