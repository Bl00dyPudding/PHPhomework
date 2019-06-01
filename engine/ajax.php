<?php

include_once('../config/config.php') ;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    function addViews ($id) {

        $sql = "SELECT * FROM images_tbl WHERE id = {$id};";
        $result = getSQL($sql);
        $views = $result[0]['views'];
        $views++;
        $sql = "UPDATE images_tbl SET views = '{$views}' WHERE (id = '{$id}');";
        sendSQL($sql);

    }

    addViews($id);
};