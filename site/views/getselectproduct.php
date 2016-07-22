<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Product</title>
</head>
<body>
    <?php
        foreach($arrayProduct as $Product) 
        {
            echo "<p>".$Product['ProductName']." </p>";
            echo "<p>".$Product['Picture']." </p>";
            echo "<a href='index.php?c=product&a=detail&id=".$Product['ProductID']."'>See detail</a>";
        }
    ?>
</form>
</body>
</html>