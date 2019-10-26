<?php
$id = $_POST['id'];
$dataArray = array();
$fd = fopen('todo.csv', 'r+');
while ($line = fgetcsv($fd, 0, ';'))
{
    if ($line[0] != $id)
        $dataArray[] = $line;
}
ftruncate($fd, 0);
$i = 0;
foreach ($dataArray as $line)
    file_put_contents('todo.csv', $line[0].';'.$line[1].PHP_EOL, FILE_APPEND);
?>