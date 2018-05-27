<?php
header('Content-Type: application/json');
$dataArray= ['team_a' => "Peru", 'team_b' => "Escocia", 'prediction_a' => "90%", 'prediction_b' => "20%"];
echo  json_encode($dataArray);
?>