<?php
//Header
require(PATH_APPLICATION."/views/header.php");
//Left
require(PATH_APPLICATION."/views/left.php");
//Main

?>
<?php $arrayUser = get_object_vars($users)?>
<div id="page_content">
    <div id="page_content_inner">
        <form action="" class="uk-form-stacked" id="user_edit_form" method="post">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-7-10">
                    <div class="md-card">
                        <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="public/assets/img/blank.png" alt="user avatar"/>
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div class="user_avatar_controls">
                                        <span class="btn-file">
                                            <span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
                                            <span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
                                            <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                        </span>
                                    <a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons">&#xE5CD;</i></a>
                                </div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"><?php echo $arrayUser['name']; ?></span><span class="sub-heading" id="user_edit_position"><?php echo $arrayUser['fullname']; ?></span></h2>
                            </div>
                            <button type="submit" class="md-fab md-fab-small md-fab-success"  name="Edit">
                                <i class="material-icons">&#xE161;</i>
                            </button>
                        </div>
                        <div class="user_content">
                            <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                                <li class="uk-active"><a href="#">Basic</a></li>
                            </ul>
                            <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                                <li>
                                    <div class="uk-margin-top">
                                        <h3 class="full_width_in_card heading_c">
                                            Thông tin cơ bản
                                        </h3>
                                        <div class="uk-grid" data-uk-grid-margin>
                                            <div class="uk-width-medium-1-2">
                                                <label for="user_edit_uname_control">User name</label>
                                                <input class="md-input" type="text" id="user_edit_uname_control" name="username" value="<?php echo $arrayUser['name']; ?>"/>
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <label for="user_edit_position_control">Password</label>
                                                <input class="md-input" type="password" id="user_edit_position_control" name="password" value="<?php echo $arrayUser['password']; ?>"/>
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <label for="user_edit_uname_control">Full Name</label>
                                                <input class="md-input" type="text" id="user_edit_uname_control" name="fullname" value="<?php echo $arrayUser['fullname']; ?>"/>
                                            </div>
                                            <div class="uk-width-medium-1-2 ">
                                                <div class="uk-form-row">
                                                    <div class="md-input-wrapper md-input-wrapper-disabled"><label><?php if($arrayUser['permission'] ==1) echo "Admin"; else echo "Member";; ?></label><input class="md-input" disabled="<?php if($arrayUser['permission'] ==1) echo "Admin"; else echo "Member";; ?>" type="text"><span class="md-input-bar"></span></div>

                                                </div>
                                            </div>
                                        </div>



                                        <h3 class="full_width_in_card heading_c">
                                            Contact info
                                        </h3>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
                                                    <div>
                                                        <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                                                </span>
                                                            <label>Email</label>
                                                            <input type="text" class="md-input" name="email" value="<?php echo $arrayUser['email']?>" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                                                </span>
                                                            <label>Phone Number</label>
                                                            <input type="text" class="md-input" name="phone" value="<?php echo $arrayUser['phone']; ?>" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                                                </span>
                                                            <label>Facebook</label>
                                                            <input type="text" class="md-input" name="user_edit_facebook" value="facebook.com/envato" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-twitter"></i>
                                                                </span>
                                                            <label for="val_birth">Birth Date<span
                                                                    class="req">*</span></label><input data-parsley-id="8" name="birthday"
                                                                                                       id="val_birth" required=""
                                                                                                       class="md-input"
                                                                                                       data-parsley-americandate=""
                                                                                                       data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)"
                                                                                                       data-uk-datepicker="{format:'YYYY-MM-DD'}"
                                                                                                       type="text" value=" <?php echo $arrayUser['birthday']; ?>"><span
                                                                class="md-input-bar"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-linkedin"></i>
                                                                </span>
                                                            <label>Address</label>
                                                            <input type="text" class="md-input" name="address" value="<?php echo $arrayUser['address']; ?>" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-google-plus"></i>
                                                                </span>
                                                            <label>Google+</label>
                                                            <input type="text" class="md-input" name="user_edit_google_plus" value="plus.google.com/+envato/about" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-3-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_c uk-margin-medium-bottom">Other settings</h3>
                            <div class="uk-form-row">
                                <input type="checkbox" checked data-switchery id="user_edit_active" />
                                <label for="user_edit_active" class="inline-label">User Active</label>
                            </div>
                            <hr class="md-hr">
                            <div class="uk-form-row">
                                <label class="uk-form-label" for="user_edit_role">User Role</label>
                                <select name="permission" data-md-selectize>
                                    <option value="">Select...</option>
                                    <option value="1">Admin</option>
                                    <option value="0">Member</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>