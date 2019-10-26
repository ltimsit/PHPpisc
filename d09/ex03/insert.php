<?php
$fd = fopen('todo.csv', 'a+');
if ($fd == NULL)
    exit();
$data = array($_GET['idx'], $_GET['value']);
fputcsv($fd, $data, ';');
?>