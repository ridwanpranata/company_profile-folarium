            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                User Profile
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Forms</li>
                                <li><a class="link-effect" href="">Form User Profile</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">

                    <!-- Bootstrap Design -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Default Elements -->
                            <?php echo form_open_multipart('admin/base_pages_profile_edit_c/edit','class = form-horizontal');?>
                                <div class="block">
                                    <ul class="nav nav-tabs nav-justified push-20" data-toggle="tabs">
                                        <li class="active">
                                            <a href="#tab-profile-personal"><i class="fa fa-fw fa-pencil"></i> Personal</a>
                                        </li>
                                        <li>
                                            <a href="#tab-profile-password"><i class="fa fa-fw fa-asterisk"></i> Password</a>
                                        </li>
                                    </ul>
                                    <div class="block-content block-content-narrow tab-content">
                                        <div class="tab-pane fade in active" id="tab-profile-personal">
                                            
                                            <input type="hidden" id="user-id-input" name="user-id-input" value="<?php echo $userprofile->user_id; ?>">
                                            <div class="form-group">
                                                <label class="col-xs-12">First Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" id="user-fname-input" name="user-fname-input" placeholder="First Name" value="<?php echo $userprofile->user_fname;?>" required="true" style="width: 50%;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12">Last Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" id="user-lname-input" name="user-lname-input" placeholder="Last Name" value="<?php echo $userprofile->user_lname;?>" required="true" style="width: 50%;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12">Email</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" id="user-email-input" name="user-email-input" placeholder="Your Email" value="<?php echo $userprofile->user_email;?>" required="true" style="width: 50%;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12" for="cp-desc-input">Bio</label>
                                                <div class="col-xs-12">
                                                    <textarea class="form-control editTextarea" id="user-bio-input" name="user-bio-input" rows="6" placeholder="Your Bio"><?php echo $userprofile->user_bio;?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12">Telepon</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" id="user-phone-input" name="user-phone-input" placeholder="Phone Number" value="<?php echo $userprofile->user_phone;?>" required="true" style="width: 50%;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12">Id line</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" id="user-line-input" name="user-line-input" placeholder="Id Line.." value="<?php echo $userprofile->user_line;?>" required="true" style="width: 50%;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12">pin BB</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" id="user-pinbb-input" name="user-pinbb-input" placeholder="Pin BB" value="<?php echo $userprofile->user_pinbb;?>" style="width: 50%;">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-xs-12" for="user-pict-input">Profile Picture</label>
                                                <i class="col-xs-12">Portrait Photo are Recomended</i>
                                                <div class="col-xs-12">
                                                    <input type="file" id="user-pict-input" name="user-pict-input">
                                                    <br>
                                                    <img style="display: block; width: auto; height: 250px; margin-left: 0px;" class="preview-img" src="<?php echo base_url(); ?>assets/admin/img/user/<?php echo $userprofile->user_pict; ?>" alt="">
                                                    <p style="text-align: left;"><?php echo $userprofile->user_pict; ?></p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="tab-profile-password">
                                            <div class="row items-push">
                                                <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <label for="profile-password">Current Password</label>
                                                            <input class="form-control input-lg" type="password" id="profile-password" name="profile-password">
                                                        </div>
                                                    </div>
                                                    <p style="color: red"><?php echo $this->session->flashdata('wrongpass'); ?></p>
                                                    <hr>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <label for="profile-password-new">New Password</label>
                                                            <input class="form-control input-lg" type="password" id="profile-password-new" name="profile-password-new">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <label for="profile-password-new-confirm">Confirm New Password</label>
                                                            <input class="form-control input-lg" type="password" id="profile-password-new-confirm" name="profile-password-new-confirm">
                                                        </div>
                                                    </div>
                                                    <p style="color: red"><?php echo $this->session->flashdata('notmatch'); ?>
                                                </div>
                                            </div>
                                        </div>

                                    <!-- START : Submit Button -->
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary pull-right" type="submit">Save</button>
                                        </div>
                                    </div>
                                    <!-- END : Submit Button -->

                                </div>
                            </form>
                        </div>
                        <!-- END Default Elements -->
                    </div>
                </div>
                <!-- END Bootstrap Design -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->


