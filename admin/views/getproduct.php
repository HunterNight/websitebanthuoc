<?php
//Header
include_once(PATH_APPLICATION . "/views/header.php");
//Left
include_once(PATH_APPLICATION . "/views/left.php");
//Main
?>
<div id="page_content">
    <div id="page_content_inner">

        <h3 class="heading_a uk-margin-bottom">Danh sách sản phẩm </h3>

        <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 hierarchical_show" data-uk-grid="{gutter: 20, controls: '#products_sort'}">
            <?php
            $stt =1;
            foreach ($arrayProduct as &$product) { ?>
            <div data-product-name="Corporis ut.">
                <div class="md-card md-card-hover-img">
                    <div class="md-card-head uk-text-center uk-position-relative">
                        <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top"><?php echo number_format($product->getUnitPrice()); ?> VND</div>
                        <img class="md-card-head-img" src="<?php echo $product->getPicture() ?>" alt=""/>
                    </div>
                    <div class="md-card-content">
                        <h4 class="heading_c uk-margin-bottom">
                            <?php echo $product->getProductName(); ?>
                            <span class="sub-heading"><?php echo $categoryName = $this->model->getCateName($product->getCategoryID()); ?></span>
                        </h4>
<!--                        <p>--><?php //echo substr($product->getDescription(),0,1); ?><!--</p>-->
                        <a href="admin.php?c=product&a=detail&id= <?php echo $product->getProductID();?>"><i class="material-icons md-24"></i></a>
                        <a href="admin.php?c=product&a=edit&id= <?php echo $product->getProductID();?>"><i class="material-icons md-24">edit</i></a>
                        <a href="admin.php?c=product&a=delete&id= <?php echo $product->getProductID();?>"><i class="material-icons md-24">delete</i></a>

                    </div>
                </div>
            </div>
            <?php }?>


        </div>



    </div>
    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="admin.php?c=product&a=insert" ">
            <i class="material-icons"></i>
        </a>
    </div>
</div>