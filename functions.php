<?php
function renderImages ($imgDirName) {

    $dir = scandir($imgDirName, 0);
    $HTMLTags = '';

    foreach ($dir as $file) {

        if ($file[0] == ".") {
            continue;
        }

        $HTMLTags .= "<a href='{$imgDirName}/{$file}'><img src='{$imgDirName}/{$file}' alt='' width='100'></a>";

    }

    return $HTMLTags;

}