<?php

$dir = scandir('img/', 0);

foreach ($dir as $file) {
    if ($file[0] == ".") {
        unset($file);
        continue;
    }
    echo "<a href='img/" . $file ."'><img src='img/" . $file . "' alt='' width='100'></a>";
}