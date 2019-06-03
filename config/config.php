<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('SITE_ROOT', "../");
define('WWW_ROOT', SITE_ROOT . 'public/');

define('ENGINE_DIR', SITE_ROOT . 'engine/');
define('TPL_DIR', SITE_ROOT . 'templates/');

define('IMG_DIR', WWW_ROOT . 'img');

require_once(ENGINE_DIR . 'functions.php');
require_once('db.php');

/////////////////////////////
/// Добавление картинок в БД
/// addImagesToDB(IMG_DIR);
/////////////////////////////