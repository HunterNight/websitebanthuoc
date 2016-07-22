<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Nhan Vien</title>
</head>
<body>
<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Chỉnh sửa Category</h3>

        <div class="md-card">
            <div class="md-card-content large-padding">
                <form novalidate="" id="form_validation" class="uk-form-stacked" action="" method="post">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-1">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="CategoryName">CategoryName<span
                                            class="req">*</span></label><input data-parsley-id="4" name="CategoryName"
                                                                               required="" class="md-input"
                                                                               type="text"
                                                                               value="<?php echo $categorySelect->CategoryName; ?>"><span
                                        class="md-input-bar"></span></div>


                            </div>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <div class="parsley-row">
                                <div class="md-input-wrapper">
                                    <textarea class="ckeditor" name="Description"><?php echo $categorySelect->Description; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <input type="submit" class="md-btn md-btn-primary" name="Edit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>