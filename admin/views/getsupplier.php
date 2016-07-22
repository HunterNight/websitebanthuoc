<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main

?>

<div id="page_content">
    <div id="page_content_inner">
        <h4 class="uk-accordion-title uk-accordion-title-primary uk-active">Danh sách nhà cung cấp </h4>
        <div class="md-card uk-margin-medium-bottom">
            <div class="md-card-content">
                <div class="uk-overflow-container">
                    <table class="uk-table uk-table-hover">
                        <thead>
                        <tr>
                            <td>STT</td>
                            <td>SupplierID</td>
                            <td>SupplierName</td>
                            <td>Adress</td>
                            <td>Phone</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stt = 1;
                        foreach ($arraySupplier as &$supplier) {
                            ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $supplier->getSupplierID(); ?></td>
                                <td><?php echo $supplier->getSupplierName(); ?></td>
                                <td><?php echo $supplier->getAddress(); ?></td>
                                <td><?php echo $supplier->getPhone(); ?></td>
                                <td>
                                    <a href="admin.php?c=supplier&a=edit&id=<?php echo $stt ?>"><i class="md-icon material-icons"></i></a>
                                    <a href="admin.php?c=supplier&a=deleter&id=<?php echo $stt ?>"><i class="md-icon material-icons">delete</i></a>
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