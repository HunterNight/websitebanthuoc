<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 6/01/16
 * Time: 11:51 PM
 */
//Dinh nghia duong dan he thong
define('PATH_SYSTEM',__DIR__.'/system');
define('PATH_APPLICATION', __DIR__.'/admin');
define('PATH_THEME',__DIR__.'/public');
define('PATH_ROOT',__DIR__);
//Lay thong so cau hinh
include_once(PATH_SYSTEM.'/config/config.php');
include_once(PATH_ROOT. "/system/core/dbcore.php");
//Connect database
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
//Danh sach cac tham so co 2 phan
$segment = array(
    'controller' => "",
    'action' => array()
);
//Neu khong truyen Controller thi se truyen controller mac dinh
$segment['controller']= empty($_GET['c']) ? CONTROLLER_DEFAULT : $_GET['c'];
$segment['action']= empty($_GET['a']) ? ACTION_DEFAULT : $_GET['a'];

include_once(PATH_SYSTEM.'/core/Controller.php');
$controller = new Controller();
$controller->load($segment['controller'],$segment['action']);
?>