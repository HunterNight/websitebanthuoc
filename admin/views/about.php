<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main
?>


<div id="page_content">
    <div id="page_content_inner">
        <h4 class="uk-accordion-title uk-accordion-title-primary uk-active">Edit About</h4>

        <form action="" method="post">
        <div class="uk-width-medium-1-1">
                            <textarea class="ckeditor" name="content" id="Description" rows="10"
                                      cols="80"><?php echo $aboutSelect->content?></textarea>
        </div>
            <input type="submit" class="md-btn md-btn-primary" name="Edit" value="Submit">
        </form>
    </div>
</div>
