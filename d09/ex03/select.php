<?php
if (file_exists('todo.csv'))
    $fd = fopen('todo.csv', 'r');
else
    $fd = fopen('todo.csv', 'w');
if ($fd == NULL)
    exit();
$csvTab = array();
$header = array('id', 'value');
while ($line = fgetcsv($fd, 1000, ';'))
{
    $csvTab[] = array_combine($header, $line);
}
echo json_encode($csvTab);
?>
