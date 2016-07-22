<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main

?>

<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Thêm mới thành viên</h3>

        <div class="md-card">
            <div class="md-card-content large-padding">
                <form novalidate="" id="form_validation" class="uk-form-stacked" action="admin.php?c=user&a=add" method="post">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-2">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="username">Username<span
                                            class="req">*</span></label><input data-parsley-id="4" name="username"
                                                                               required="" class="md-input"
                                                                               type="text"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="password">Password<span
                                            class="req">*</span></label><input data-parsley-id="6" name="password"
                                                                               data-parsley-trigger="change" required=""
                                                                               class="md-input" type="password"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="fullname">Full Name<span
                                            class="req">*</span></label><input data-parsley-id="4" name="fullname"
                                                                               required="" class="md-input"
                                                                               type="text"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-2">
                            <div class="parsley-row uk-margin-top">
                                <div class="md-input-wrapper"><label for="val_birth">Birth Date<span
                                            class="req">*</span></label><input data-parsley-id="8" name="birthday"
                                                                               id="val_birth" required=""
                                                                               class="md-input"
                                                                               data-parsley-americandate=""
                                                                               data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)"
                                                                               data-uk-datepicker="{format:'YYYY-MM-DD'}"
                                                                               type="text"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="email">Email<span
                                            class="req">*</span></label><input data-parsley-id="6" name="email"
                                                                               data-parsley-trigger="change" required=""
                                                                               class="md-input" type="email"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                    </div>

                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-2">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="phone">Phone<span
                                            class="req">*</span></label><input data-parsley-id="4" name="phone"
                                                                               required="" class="md-input"
                                                                               type="text"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="parsley-row">
                                <div class="md-input-wrapper"><label for="address">Address<span
                                            class="req">*</span></label><input data-parsley-id="6" name="address"
                                                                               data-parsley-trigger="change" required=""
                                                                               class="md-input" type="text"><span
                                        class="md-input-bar"></span></div>

                            </div>
                        </div>
                    </div>

                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <input type="submit" class="md-btn md-btn-primary" name="Add" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
