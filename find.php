<?php

require_once __DIR__ . "/bootstrap/bootstrap.php";

header('Content-Type: application/json');
$SearchStorage = new \Atlas\Marker\MarkerSearchStorage();

$Markers = $SearchStorage->searchByTextQuery($_POST['text']);
$result = [];
foreach ($Markers as $Marker) {
    $result[] = $Marker->export();
}

echo json_encode([
    'points' => $result,
]);