            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                Company Profile
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Forms</li>
                                <li><a class="link-effect" href="">Form Company Profile</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">

                    <!-- Bootstrap Design -->
                    <div class="row">
                        <!-- Default Elements -->
                            <div class="col-lg-6">
                                <div class=" block block-themed">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <label class = "" name = ""><span class = "glyphicon glyphicon-edit"></span></label>
                                            </li>
                                        </ul>
                                        <h3>Circle 1</h3>
                                    </div>
                                    <div class="block-content">
                                        <?php echo form_open_multipart('admin/manage_promo_c/edit','class = form-horizontal');?>
                                        <input type="hidden" id="promo-id-input" name="promo-id-input" value="<?php echo $promo1->content_promo_id; ?>">
                                        <div class="form-group">
                                            <label class="col-xs-12">Title</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="promo-title-input" name="promo-title-input" placeholder="Text.." value="<?php echo $promo1->content_promo_title; ?>" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12" for="promo-list-input">Item List</label>
                                            <div class="col-xs-12">
                                                <div class="input_fields_wrap_p1">
                                                    <?php $count = 0; ?>
                                                    <?php foreach ($listP1 as $key): ?>
                                                        <?php $count++ ?>
                                                        <div><input style="margin:10px; width: 350px;" type="text" name="<?php echo $key->content_list_id;?>" value="<?php echo $key->content_list_item;?>" readonly>
                                                        <a href="#" class="btn btn-danger rlist_p1_id"  name="<?php echo $key->content_list_id;?>" data-toggle = "modal" data-target = "#delete"><span class="glyphicon glyphicon-remove"></span></a></div>
                                                    <?php endforeach ?>
                                                    <div id="countdata_p1" data-count="<?php echo $count; ?>"></div>
                                                        <button class="add_field_button_p1 btn-success" style="padding: 5px; margin-bottom: 10px;">Add</button>
                                                </div>
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
                    </div>
                    <div class="col-lg-6">
                                <div class=" block block-themed">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <label class = "" name = ""><span class = "glyphicon glyphicon-edit"></span></label>
                                            </li>
                                        </ul>
                                        <h3>Circle 2</h3>
                                    </div>
                                    <div class="block-content">
                                        <?php echo form_open_multipart('admin/manage_promo_c/edit2','class = form-horizontal');?>
                                        <input type="hidden" id="promo2-id-input" name="promo2-id-input" value="<?php echo $promo2->content_promo_id; ?>">
                                        <div class="form-group">
                                            <label class="col-xs-12">Title</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="promo2-title-input" name="promo2-title-input" placeholder="Text.." value="<?php echo $promo2->content_promo_title; ?>" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12">Subtitle 1</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="promo2-sub-title-input" name="promo2-sub-title-input" placeholder="Text.." value="<?php echo $promo2->content_promo_sub_title; ?>" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12" for="promo2_1-list-input">Item List</label>
                                            <div class="col-xs-12">
                                                <div class="input_fields_wrap_p2_1">
                                                    <?php $count = 0; ?>
                                                    <?php foreach ($listP2_1 as $key): ?>
                                                        <?php $count++ ?>
                                                        <div><input style="margin:10px; width: 350px;" type="text" name="<?php echo $key->content_list_id;?>" value="<?php echo $key->content_list_item;?>" readonly>
                                                        <a href="#" class="btn btn-danger rlist_p2_1_id"  name="<?php echo $key->content_list_id;?>" data-toggle = "modal" data-target = "#delete"><span class="glyphicon glyphicon-remove"></span></a></div>
                                                    <?php endforeach ?>
                                                    <div id="countdata_p2_1" data-count="<?php echo $count; ?>"></div>
                                                        <button class="add_field_button_p2_1 btn-success" style="padding: 5px; margin-bottom: 10px;">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12">Subtitle 2</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="promo2-sub-title2-input" name="promo2-sub-title2-input" placeholder="Text.." value="<?php echo $promo2->content_promo_sub_title2; ?>" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12" for="promo2_2-list-input">Item List</label>
                                            <div class="col-xs-12">
                                                <div class="input_fields_wrap_p2_2">
                                                    <?php $count = 0; ?>
                                                    <?php foreach ($listP2_2 as $key): ?>
                                                        <?php $count++ ?>
                                                        <div><input style="margin:10px; width: 350px;" type="text" name="<?php echo $key->content_list_id;?>" value="<?php echo $key->content_list_item;?>" readonly>
                                                        <a href="#" class="btn btn-danger rlist_p2_2_id"  name="<?php echo $key->content_list_id;?>" data-toggle = "modal" data-target = "#delete"><span class="glyphicon glyphicon-remove"></span></a></div>
                                                    <?php endforeach ?>
                                                    <div id="countdata_p2_2" data-count="<?php echo $count; ?>"></div>
                                                        <button class="add_field_button_p2_2 btn-success" style="padding: 5px; margin-bottom: 10px;">Add</button>
                                                </div>
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
        
        <div class = "modal fade" id = "add_promo" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
            <div class = "modal-dialog" role = "document">
                <div class = "modal-content panel-primary">
                    <div class = "modal-header panel-heading">
                        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                        <h4 class = "modal-title" id = "myModallabel">Add new promo</h4>
                    </div>
                    <form method = "POST" action = "form_promo_c/add" enctype = "multipart/form-data">
                        <div class  = "modal-body">
                            <div class = "form-group">
                                <label>Title:</label>
                                <input type = "text" name = "addpromo-title-input" required = "required" maxlength="30" class = "form-control" />
                            </div>
                            <div class = "form-group">
                                <label>Describe:</label>
                                <textarea class="form-control editTextarea" name="addpromo-desc-input" id="" cols="30" rows="3" maxlength="200" required="required"></textarea>
                            </div>
                            <div class = "form-group">
                                <label>Picture:</label>
                                <input type = "file" id="addpromo-pict-input" name = "addpromo-pict-input" class = "form-control" required="true" required="required" />
                                <?php print_r($this->session->flashdata('error')); ?>
                                <img style="display: block; width: 40%; height: 40%; padding:10px; margin: 10px auto;" class="preview-img" alt="">
                            </div>
                        </div>
                        <div class = "modal-footer">
                            <button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
                        </div>
                    </form>
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
