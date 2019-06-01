<?php

// Отрисовка изображений

function renderImages () {

    $sql = "SELECT * FROM images_tbl ORDER BY views DESC";

    $result = getSQL($sql);

    $HTMLTags = '';

    for ($i = 0; $i < count($result); $i++) {

        $id = $result[$i]['id'];
        $views = $result[$i]['views'];
        $link = $result[$i]['link'];

        $HTMLTags .= "<img src='{$link}' alt='' width='100' id='img{$id}' onclick='openModal();currentImg({$id},{$views})'>";

    }

    return $HTMLTags;

}

// Добавление картинок в БД

function createTable(){

    $sql = "
        DROP TABLE IF EXISTS `images_tbl`;
        CREATE TABLE `images_tbl` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `views` INT NULL DEFAULT 0,
        `link` VARCHAR(45) NULL,
        PRIMARY KEY (`id`),
        UNIQUE INDEX `id_images_UNIQUE` (`id` ASC));
    ";

     sendSQL($sql);

}

function addImagesToDB($imgDirName) {

    createTable();

    $dir = scandir($imgDirName, 0);
    $sql = '';

    foreach ($dir as $file) {

        if ($file[0] == ".") {
            continue;
        }

        $path = "{$imgDirName}/{$file}";

        $sql .= "INSERT INTO images_tbl (link) VALUES ('{$path}');";
    }

    sendSQL($sql);

}