            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                Company Logo
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Header</li>
                                <li><a class="link-effect" href="">Manage Company Logo</a></li>
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
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button"><i class="si si-settings"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block-content block-content-narrow">

                                    <?php echo form_open_multipart('admin/manage_logo_c/edit','class = form-horizontal');?>
                                    <input type="hidden" id="logo-id-input" name="logo-id-input" value="<?php echo $logo->content_header_id; ?>">
                                    <div class="form-group">
                                        <label class="col-xs-12">Company Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="logo-title-input" name="logo-title-input" placeholder="Text.." value="<?php echo $logo->content_header_title;?>" required="true" style="width: 50%;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12" for="logo-desc-input">Short Description</label>
                                        <div class="col-xs-12">
                                            <textarea class="form-control editTextarea" id="logo-desc-input" name="logo-desc-input" rows="6" placeholder="Desc your Company"><?php echo $logo->content_header_desc;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12" for="logo-pict-input">Logo</label>
                                        <p style="font-style: italic; margin-left: 20px; margin-bottom:0px;"> *squre recomended <br> </p>
                                        <p style="font-style: italic; margin-left: 20px;"> *recomended pixel 720 x 720 px</p>
                                        <div class="col-xs-12">
                                            <input type="file" id="logo-pict-input" name="logo-pict-input">
                                            <img style="display: block; width: 100px; height: 100px; padding:10px;" class="preview-img" src="<?php echo base_url(); ?>assets/admin/img/header/<?php echo $logo->content_header_pict; ?>" alt="">
                                            <p><?php echo $logo->content_header_pict; ?></p>
                                            <?php print_r($this->session->flashdata('error')); ?>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary pull-right" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Default Elements -->
                    </div>
                </div>
                <!-- END Bootstrap Design -->
            </div>
            <!-- END Page Content -->

            <div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                <div class = "modal-dialog" role = "document">
                    <div class = "modal-content ">
                        <div class = "modal-body">
                            <center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
                            <br />
                            <center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- END Main Container -->


