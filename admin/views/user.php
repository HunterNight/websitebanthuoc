<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 9/01/16
 * Time: 4:48 PM
 */
$arrayUser = get_object_vars($users);
foreach($arrayUser as $v=> $k)
{
    echo $v . "  " .$k ;
    echo "<br>";
}
?>