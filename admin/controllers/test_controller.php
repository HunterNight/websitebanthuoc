<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 7/01/16
 * Time: 12:56 AM
 */
class Test_Controller
{
    var $hello;
    var $hello1;
    var $hello2;
    var $hello3;
    public function indexAction()
    {
        $user = "Nam pro";
        require(PATH_APPLICATION . '/views/getUser.php');
    }
    public function notAction()
    {
        echo "This is the not Pages";
    }
}

?>