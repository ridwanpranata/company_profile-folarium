            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                Main Header
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Header</li>
                                <li><a class="link-effect" href="">Manage Main Header</a></li>
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

                                    <?php echo form_open_multipart('admin/manage_header_c/edit','class = form-horizontal');?>
                                    <input type="hidden" id="header-id-input" name="header-id-input" value="<?php echo $header->content_header_id; ?>">
                                    <div class="form-group">
                                        <label class="col-xs-12">Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="header-title-input" name="header-title-input" placeholder="Text.." value="<?php echo $header->content_header_title;?>" required="true" style="width: 50%;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12" for="header-desc-input">Describe</label>
                                        <div class="col-xs-12">
                                            <textarea class="form-control editTextarea" id="header-desc-input" name="header-desc-input" rows="6" placeholder="Desc your Company"><?php echo $header->content_header_desc;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12" for="header-list-input">Item List</label>
                                        <div class="col-xs-12">
                                            <div class="input_fields_wrap">
                                                <?php $count = 0; ?>
                                                <?php foreach ($listHeader as $key): ?>
                                                    <?php $count++ ?>
                                                    <div ><input style="margin:10px; width: 350px;" type="text" name="<?php echo $key->content_list_id;?>" value="<?php echo $key->content_list_item;?>" readonly>
                                                    <a href="#" class="btn btn-danger rlistHeader_id"  name="<?php echo $key->content_list_id;?>" data-toggle = "modal" data-target = "#delete"><span class="glyphicon glyphicon-remove"></span></a></div>
                                                <?php endforeach ?>
                                                <div id="countdata" data-count="<?php echo $count; ?>"></div>
                                                    <button class="add_field_button_header btn-success" style="padding: 5px; margin-bottom: 10px;">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12" for="header-pict-input">Background</label>
                                        <p style="font-style: italic; margin-left: 20px;"> *recomended 1280 x 720 px</p>
                                        <div class="col-xs-12">
                                            <input type="file" id="header-pict-input" name="header-pict-input">
                                            <img style="display: block; width: 40%; height: 40%; padding:10px;" class="preview-img" src="<?php echo base_url(); ?>assets/admin/img/header/<?php echo $header->content_header_pict; ?>" alt="">
                                            <p><?php echo $header->content_header_pict; ?></p>
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

            <div class = "modal fade" id = "upload_cp" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                <div class = "modal-dialog" role = "document">
                    <div class = "modal-content panel-primary">
                        <div class = "modal-header panel-heading">
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                            <h4 class = "modal-title" id = "myModallabel">Add new Promo</h4>
                        </div>

                        <div class="modal-body">
                            <?php echo form_open("manage_header_c/upload_cp", array("class" => "dropzone")); ?>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
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


