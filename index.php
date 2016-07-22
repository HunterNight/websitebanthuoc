<?php
session_start();
//Dinh nghia duong dan he thong
define('PATH_SYSTEM', __DIR__ . '/system');
define('PATH_APPLICATION', __DIR__ . '/site');
define('PATH_ROOT', __DIR__);
//Lay thong so cau hinh
include_once(PATH_SYSTEM . '/config/config.php');
include_once(PATH_ROOT. "/system/core/dbcore.php");
$segment = array(
    'controller' => "",
    'action' => array()
);
$segment['controller'] = empty($_GET['c']) ? CONTROLLER_DEFAULT : $_GET['c'];
$segment['action'] = empty($_GET['a']) ? ACTION_DEFAULT : $_GET['a'];
include_once(PATH_SYSTEM . '/core/Controller.php');
$controller = new Controller();
$controller->load($segment['controller'], $segment['action']);
?>
