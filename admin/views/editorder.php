<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDIT Order</title>
    <style>
        label{
            float: left;
            width: 150px;
            margin-left: 250px;
        }
        input{
            margin-bottom: 5px;
        }
        h3{
            float: left;
            margin-left: 250px;
        }
    </style>
</head>
<body>
<form action="" method="POST">
    <h3>Edit Order with OrderID <?php echo $orderSelect->OrderID; ?></h3>
    <br>
    <br>
    <br>
    <br>
    <br>
    <label>UserID:</label>
    <input type="text" name="UserID" value=<?php echo $orderSelect->UserID?>>
    <br>
    <label>OrderDate:</label>
    <input type="text" name="OrderDate" value=<?php echo $orderSelect->OrderDate?>>
    <br>
    <label>ShipName:</label>
    <input type="text" name="ShipName" value=<?php echo $orderSelect->ShipName?>>
    <br>
    <label>ShipAddress:</label>
    <input type="text" name="ShipAddress" value=<?php echo $orderSelect->ShipAddress?>>
    <br>
    <input type="submit" name="Edit" value="Edit" style="margin-left:450px">
</form>
</body>
</html>