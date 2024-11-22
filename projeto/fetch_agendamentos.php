<?php
include 'db.php'; 

$sql = "SELECT * FROM agendamentos";
$result = $conn->query($sql);

$agendamentos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $agendamentos[] = $row;
    }
}

echo json_encode($agendamentos);
?>