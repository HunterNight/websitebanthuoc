<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
require(PATH_APPLICATION . "/models/user_model.php");
$userName = new user_model();
//Main

?>
    <div id="page_content">
        <div id="page_content_inner">
            <h4 class="uk-accordion-title uk-accordion-title-primary uk-active">Danh sách đơn hàng</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-hover">
                            <thead>
                            <tr>
                                <th><span>STT</span></th>
                                <th><span>Order</span></th>
                                <th><span>User</span></th>
                                <th><span>OrderDate</span></th>
                                <!--                            <th><span>ShipName</span></th>-->
                                <!--                            <th><span>ShipAddress</span></th>-->
                                <th><span>Action</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $stt = 1;
                            foreach ($arrayOrder as &$order){
                                ?>
                                <tr>
                                    <td><?php echo $stt ?></td>
                                    <td>#<?php echo $order->getOrderID() ?></td>
                                    <td><?php echo $userName->getUserName($order->getUserID()) ?></td>
                                    <td><?php echo $order->getOrderDate() ?></td>
                                    <!--                                <td>--><?php //echo $order->getShipAddress() ?><!--</td>-->
                                    <!--                                <td>--><?php //echo $order->getShipAddress() ?><!--</td>-->

                                    <td>
                                        <a href="admin.php?c=order&a=edit&id=<?php echo $order->getOrderID() ?>"><i class="md-icon material-icons"></i></a>
                                        <a href="admin.php?c=order&a=detail&id=<?php echo $order->getOrderID() ?>"><i class="md-icon material-icons"></i></a>
                                        <a href="admin.php?c=order&a=delete&id=<?php echo $order->getOrderID() ?>"><i class="md-icon material-icons">delete</i></a>
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

<?php

?>