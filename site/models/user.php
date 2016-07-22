<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 6/01/16
 * Time: 11:33 PM
 */
class User
{
    var $name;
    var $password;
    var $email;

    /**
     * User constructor.
     * @param $name
     * @param $password
     * @param $email
     */
    public function __construct($name, $password, $email)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }

}
?>