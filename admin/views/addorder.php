<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD Order</title>
    <style>
        label{
            float: left;
            width: 150px;
            margin-left: 250px;
        }
        input{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<form action="" method="POST">
    <label>UserID:</label>
    <input type="text" name="UserID">
    <br>
    <label>OrderDate:</label>
    <input type="text" name="OrderDate">
    <br>
    <label>ShipName:</label>
    <input type="text" name="ShipName">
    <br>
    <label>ShipAddress:</label>
    <input type="text" name="ShipAddress">
    <br>
    <input type="submit" name="Add" value="Add" style="margin-left:450px">
</form>
</body>
</html>