<?php
require(PATH_APPLICATION."/views/header.php");
?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Categoty</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">

	<div class="row">

        <div class="list-group">
  <a href="#" class="list-group-item active">
    Danh sách các danh mục
  </a>
  <?php foreach ($arrayCategory as &$category)
                {
                ?>
  <a href="index.php?c=product&a=getbycatid&catid=<?php echo $category->getCategoryID();?>&page=1" class="list-group-item"><?php echo $category->getCategoryName();?></a>
 <?php }?>
</div>



        </div>

	</div>
</div>
<?php
require(PATH_APPLICATION."/views/footer.php");
?>