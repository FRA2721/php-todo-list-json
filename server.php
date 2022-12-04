<?php
// read json data
$data = file_get_contents("todo.json");

// convert the receive data into a variable
$list_item = json_decode($data, true);

// json content
header("Content-Type: application/json");

//  send json data into the list item
echo json_encode($list_item);
?>