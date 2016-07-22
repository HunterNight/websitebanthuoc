<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 28/02/16
 * Time: 8:39 PM
 */
include(PATH_ROOT . "/admin/models/about_entity.php");

class about_model
{

    /**
     * About_Model constructor.
     */
    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function get()
    {
        $query = "SELECT * FROM About";
        $result = $this->temp->DB_Query($query);
        $aboutArray = array();
        while ($row = $this->temp->DB_Fetch($result)) {
            $about = new about_entity(
                $row['id'], $row['content']);
            array_push($aboutArray, $about);
        }
        return $aboutArray;
    }
    public function add(Index_Entity $index_Entity)
    {
        $query = "INSERT INTO About(id, content)
        VALUES ('$index_Entity->CategoryID',
                '$index_Entity->CategoryName'";
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function getbyid($id)
    {
        $query = "SELECT * FROM About WHERE id='".$id."'";
        $result = $this->temp->DB_Query($query);
        $data=$this->temp->DB_Fetch($result);
        $about=new about_entity($data['id'],$data['content']);
        return $about;
    }
    public function edit(about_entity $about_entity)
    {
        $query = "UPDATE About SET content='$about_entity->content'
                                WHERE   id=".$about_entity->id;
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function delete()
    {
        $query = "";
    }
}