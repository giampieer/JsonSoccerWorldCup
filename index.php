<?php
header('Content-Type: application/json');
$dataArray= [
  'team_a' => "Alemania",
  'team_b' => "Mexico",
  'winner' => [
    'team' =>"Alemania",
    'prediction' => "72%"
  ],
];
echo  json_encode($dataArray);
?>
