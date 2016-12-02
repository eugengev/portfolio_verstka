<?php
$dirf = 'images\preload';
$dir  = scandir($dirf);
foreach ($dir as $file) {
if (($file != '..') && ($file != '.')) {
    echo "<img src='images/$file' />";
    }
}
?>