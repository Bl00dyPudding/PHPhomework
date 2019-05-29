<?php
function renderImages ($imgDirName) {

    $dir = scandir($imgDirName, 0);
    $HTMLTags = '';
    $i = 0;

    foreach ($dir as $file) {

        if ($file[0] == ".") {
            continue;
        }

        $HTMLTags .= "<img src='{$imgDirName}/{$file}' alt='' width='100' id='img{$i}' onclick='openModal();currentImg({$i})'>";
        //$HTMLTags .= "<a href='{$imgDirName}/{$file}' target='_blank'><img src='{$imgDirName}/{$file}' alt='' width='100' id='img{$i}'></a>";

        $i++;
    }

    return $HTMLTags;

}

//