<?php
$url = 'http://www.example.com/';
$d = file_get_contents($url);

if(isset($_GET['callback']))
{
    header('Content-Type: text/javascript; charset=utf-8');
    echo $_GET['callback'] . '(' . $d . ');';
}
?>
