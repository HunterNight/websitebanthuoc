<?php
@session_start();
//unset($_SESSION["Giohang"]);
session_destroy();
header("Location: index.php");
?>