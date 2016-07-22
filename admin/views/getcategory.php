<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main

?>

<div id="page_content">
    <div id="page_content_inner">
        <h4 class="uk-accordion-title uk-accordion-title-primary uk-active">Danh sách Category</h4>
        <div class="md-card uk-margin-medium-bottom">
            <div class="md-card-content">
                <div class="uk-overflow-container">
                    <table class="uk-table uk-table-hover">
                        <thead>
                        <tr>
                            <td>STT</td>
                            <td>CategoryID</td>
                            <td>CategoryName</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stt =1;
                        foreach ($arrayCategory as &$category){
                            ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $category->getCategoryID() ?></td>
                                <td><?php echo $category->getCategoryName() ?></td>
                                <td>
                                    <a href="admin.php?c=category&a=edit&id=<?php echo $category->getCategoryID() ?>"><i class="md-icon material-icons"></i></a>
                                    <a href="admin.php?c=category&a=delete&id=<?php echo $category->getCategoryID() ?>"><i class="md-icon material-icons">delete</i></a>
                                </td>

                                <?php $stt++; ?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>