<?php
//Header
include_once(PATH_APPLICATION . "/views/header.php");
//Left
include_once(PATH_APPLICATION . "/views/left.php");
//Main

?>
<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Thêm mới sản phẩm </h3>

        <div class="md-card">
            <div class="md-card-content large-padding">
                <form novalidate="" id="form_validation" class="uk-form-stacked" action="" method="post" enctype="multipart/form-data">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-1">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="ProductName">Tên sản phẩm <span
                                            class="req">*</span></label><input data-parsley-id="4" name="ProductName"
                                                                               required="" class="md-input"
                                                                               type="text"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <select name="SupplierID" id="select_demo_1" data-md-selectize>
                                <option value="">Chọn nhà cung cấp</option>
                                <?php
                                $arrayId = $modelSupplier->getIdList();
                                foreach ($arrayId as &$idSupplier) {
                                    echo '<option value="' . $idSupplier['SupplierID'] . '">' . $idSupplier['SupplierName'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <select name="CategoryID" id="select_demo_1" data-md-selectize>
                                <option value="">Chọn Category ...</option>
                                <?php
                                $arrayId = $modelCategory->getIdList();
                                foreach ($arrayId as &$idCategory) {
                                    echo '<option value="' . $idCategory['CategoriesID'] . '">' . $idCategory['CategoriesName'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label class="uk-form-label" for="kUI_numeric_price">Description</label>
                            <textarea class="ckeditor" name="Description" id="Description" rows="10"
                                      cols="80"></textarea>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="uk-form-row">
                                <label class="uk-form-label" for="kUI_numeric_price">Đơn giá </label>
                                <input name="UnitPrice" id="kUI_numeric_price" type="number"
                                       class="uk-form-width-medium" value="0"
                                       min="0" max="1000000"/>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="uk-form-row">
                                <label class="uk-form-label" for="kUI_numeric_weight">SaleOff</label>
                                <input name="SaleOff" id="kUI_numeric_price_discount" type="number" class="uk-form-width-medium"
                                       value="0.1"
                                       min="0" max="1"/>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="uk-form-row">
                                <label class="uk-form-label" for="kUI_numeric_stock">Số lượng </label>
                                <input name="Quantity" id="kUI_numeric_stock" type="number" class="uk-form-width-medium"
                                       value="0"
                                       min="0" max="1000"/>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="md-input-wrapper"><label for="Unit">Đơn vị: <span
                                        class="req">*</span></label><input data-parsley-id="4" name="Unit"
                                                                           required="" class="md-input"
                                                                           type="text"><span
                                    class="md-input-bar"></span></div>
                        </div>
<!--                        <div class="uk-width-medium-1-1">-->
<!--                            -->
<!--                            <div class="md-input-wrapper"><label for="Picture">Ảnh sản phẩm: <span-->
<!--                                        class="req">*</span></label><input data-parsley-id="4" name="Picture"-->
<!--                                                                           required="" class="md-input"-->
<!--                                                                           type="text"><span-->
<!--                                    class="md-input-bar"></span></div>-->
<!--                        </div>-->
                        <div class="uk-width-medium-1-1">

<!--                            <div class="uk-form-file md-btn md-btn-primary">-->
<!--                                Select-->
<!--                                <input id="form-file" type="file" name="Picture">-->
<!--                            </div>-->
                            <span class="btn-file">
                                <label>Thêm ảnh</label>
                                            <span class="fileinput-new"><i class="material-icons"></i></span>
                                            <input name="Picture" id="user_edit_avatar_control" type="file">
                                        </span>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin="">
                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    <input type="submit" class="md-btn md-btn-primary" name="Add" value="Submit">
                                </div>
                            </div>
                </form>
            </div>
        </div>
        <!--        <form>-->
        <!--            <textarea name="Description" id="Description" rows="10" cols="80"></textarea>-->
        <!--            <script>    CKEDITOR.replace('Description');</script>-->
        <!--        </form>-->
        <!--    </div>-->
