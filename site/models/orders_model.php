<?php
include_once(PATH_ROOT . "/site/models/orders_entity.php");
class orders_model
{
    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function insert(orders_entity $orders_Entity)
    {
        $query = "INSERT INTO OrderDetails(OrderID,ProductID,Quantity,Price)
        VALUES ('$orders_Entity->OrderID',
                '$orders_Entity->ProductID',
                '$orders_Entity->Quantity',
                '$orders_Entity->Price')";
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
}
?>