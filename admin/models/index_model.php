<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 9/02/16
 * Time: 9:31 AM
 */
    class index_model
    {
        public function __construct()
        {
            $this->temp=new dbcore();
        }



        public function check($username, $password)
        {
            $query = "SELECT * FROM Users WHERE username ='" . $username . "' AND password ='" . $password . "' ";
            $result = $this->temp->DB_Query($query);
            $permission=$this->temp->DB_Fetch($result)['permission'];
            if (mysqli_num_rows($result) != null && $permission == 1) {
                return 1;
            } else {
                return 0;
            }
        }
    }
?>