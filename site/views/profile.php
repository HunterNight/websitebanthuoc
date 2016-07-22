
<?php
require(PATH_ROOT."/site/views/header.php");
$arrayUser = get_object_vars($users);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?php echo strtoupper($arrayUser['name']) ?></strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                        <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                          <dl>
                            <dt>DEPARTMENT:</dt>
                            <dd>Administrator</dd>
                            <dt>HIRE DATE</dt>
                            <dd>11/12/2013</dd>
                            <dt>DATE OF BIRTH</dt>
                               <dd>11/12/2013</dd>
                            <dt>GENDER</dt>
                            <dd>Male</dd>
                          </dl>
                        </div>-->
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Chức danh:</td>
                                    <td><?php if($arrayUser['permission'] ==1) echo "Admin"; else echo "Thành Viên ";  ?></td>
                                </tr>
                                <tr>
                                    <td>Full Name</td>
                                    <td><?php echo $arrayUser['fullname'] ?></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td><?php echo $arrayUser['birthday'] ?></td>
                                </tr>

                                <tr>

                                <tr>
                                    <td>Home Address</td>
                                    <td><?php echo $arrayUser['address'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="<?php echo $arrayUser['email'] ?>"><?php echo $arrayUser['email'] ?></a></td>
                                </tr>
                                <td>Phone Number</td>
                                <td><?php echo $arrayUser['phone'] ?>
                                </td>

                                </tr>

                                </tbody>
                            </table>

                            <a href="index.php?c=index&a=history" class="btn btn-primary">Lịch sử giao dịch</a>
                            <?php
                             if($arrayUser['permission'] ==1)
                             {
                            ?>
                            <a href="admin.php?c=index&a=dashboard" class="btn btn-primary">Admin</a>
                            <?php
                             }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="index.php?c=index&a=edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
<!--                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                        </span>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
require(PATH_ROOT."/site/views/footer.php");
?>