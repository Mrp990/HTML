<?php
$formData = json_decode(file_get_contents('php://input'), true);

if (!file_exists('database.json')) {
    file_put_contents('database.json', json_encode([]));
}

$currentData = json_decode(file_get_contents('database.json'), true);

$currentData[] = $formData;

file_put_contents('database.json', json_encode($currentData));

echo json_encode(['success' => true, 'message' => 'Form data submitted successfully.']);
?>
