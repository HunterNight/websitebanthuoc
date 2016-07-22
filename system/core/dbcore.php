<?php

/**
 * Created by PhpStorm.
 * User: joker
 * Date: 20/02/16
 * Time: 2:59 PM
 */
class dbcore
{
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_query($this->conn,"SET NAMES 'utf8'");

    }

    function DB_Query($query)
    {
        return mysqli_query($this->conn, $query);
    }

    function DB_Fetch($query)
    {
        return mysqli_fetch_assoc($query);
    }

}
