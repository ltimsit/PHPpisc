<?php
file_put_contents('debug.txt', 'test0');
$fd = fopen('todo.csv', 'r');
if ($fd == NULL)
    exit();
$csvTab = array();
$header = array('id', 'value');
file_put_contents('debug.txt', 'test1');
while ($line = fgetcsv($fd, 1000, ';'))
{
    $csvTab[] = array_combine($header, $line);
}
file_put_contents('debug.txt', 'test2');
echo json_encode($csvTab);
file_put_contents('debug.txt', 'test3');

?>
