<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main

?>

<div id="page_content">
<div id="page_content_inner">
    <h4 class="uk-accordion-title uk-accordion-title-primary uk-active">Danh sách thành viên</h4>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <div class="uk-overflow-container">
                <table class="uk-table uk-table-hover">
                    <thead>
                    <tr>
                        <th><span>STT</span></th>
                        <th><span>Username</span></th>
                        <th><span>Full Name</span></th>
                        <th><span>Address</span></th>
                        <th><span>Role</span></th>
                        <th><span>Email</span></th>
                        <th><span>Phone</span></th>
                        <th><span>Action</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $stt = 1;
                    foreach ($arrayUser as &$user) {
                        ?>
                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><?php echo $user->getName() ?></td>
                            <td><?php echo $user->getFullName() ?></td>
                            <td><?php echo $user->getAddress() ?></td>
                            <td><?php if($user->getPermission() == 1) echo "Admin";else echo "Member"  ?></td>
                            <td><?php echo $user->getEmail() ?></td>
                            <td><?php echo $user->getPhone() ?></td>

                            <td>
                                <a href="admin.php?c=user&a=edit&id=<?php echo $user->getID() ?>"><i class="md-icon material-icons"></i></a>
                                <a href="admin.php?c=user&a=deleteuser&id=<?php echo $user->getID() ?>"><i class="md-icon material-icons">delete</i></a>
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