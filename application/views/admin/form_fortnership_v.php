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
                        <?php $count = 0 ?>
                        <?php foreach ($fortnership as $key): ?>
                            <?php $count++ ?>
                        <?php endforeach ?>
                        <?php if($count < 6 ) { ?>
                            <button class = "btn btn-success" style="margin-left: 15px;" type = "button" href = "#" data-toggle = "modal" data-target = "#add_fortnership"><span class = "glyphicon glyphicon-plus"></span> Add new </button>
                        <?php } else { ?>
                            <button class = "btn btn-success disabled" style="margin-left: 15px;" type = "button" href = "#"><span class = "glyphicon glyphicon-plus"></span> Add new </button>
                        <?php } ?>
                        <br>
                        <br>
                        <?php $no = 1; ?>
                        <?php foreach ($fortnership as $key): ?>
                            <div class="col-lg-4">
                                <div class=" block block-themed">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <a class = "rfortnership_id" name = "<?php echo $key->content_fortnership_id; ?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a>
                                            </li>
                                        </ul>
                                        <h3>Circle <?php echo $no++; ?></h3>
                                    </div>
                                    <div class="block-content">
                                        <?php echo form_open_multipart('admin/form_fortnership_c/edit','class = form-horizontal');?>
                                        <input type="hidden" id="fortnership-id-input" name="fortnership-id-input" value="<?php echo $key->content_fortnership_id; ?>">
                                        <div class="form-group">
                                            <label class="col-xs-12">Title</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="fortnership-title-input" name="fortnership-title-input" placeholder="Text.." value="<?php if ($key->content_fortnership_title != NULL) { echo $key->content_fortnership_title;}?>" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12" for="fortnership-desc-input">Describe</label>
                                            <div class="col-xs-12">
                                                <textarea class="form-control editTextarea" id="fortnership-desc-input" name="fortnership-desc-input" rows="8" placeholder="Desc your Company" maxlength="250"><?php echo $key->content_fortnership_desc;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-xs-12" for="fortnership-pict-input">Picture</label>
                                            <div class="col-xs-12">
                                                <input type="file" id="fortnership-pict-input" name="fortnership-pict-input">
                                                <br>
                                                <?php print_r($this->session->flashdata('error')); ?>
                                                <img style="display: block; width: 150px; height: 150px; padding:10px; margin: 10px auto;" class="preview-img" src="<?php echo base_url(); ?>assets/admin/img/fortnership/<?php echo $key->content_fortnership_pict; ?>" alt="">
                                                <p style="text-align: center;"><?php echo $key->content_fortnership_pict; ?></p>
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

                    <?php endforeach ?>



                    <!-- END Default Elements -->
                </div>
            </div>
            <!-- END Bootstrap Design -->
        </div>
        <!-- END Page Content -->
        
        <div class = "modal fade" id = "add_fortnership" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
            <div class = "modal-dialog" role = "document">
                <div class = "modal-content panel-primary">
                    <div class = "modal-header panel-heading">
                        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                        <h4 class = "modal-title" id = "myModallabel">Add new Fortnership</h4>
                    </div>
                    <form method = "POST" action = "form_fortnership_c/add" enctype = "multipart/form-data">
                        <div class  = "modal-body">
                            <div class = "form-group">
                                <label>Title:</label>
                                <input type = "text" name = "addfortnership-title-input" required = "required" maxlength="30" class = "form-control" />
                            </div>
                            <div class = "form-group">
                                <label>Describe:</label>
                                <textarea class="form-control editTextarea" name="addfortnership-desc-input" id="" cols="30" rows="3" maxlength="200" required="required"></textarea>
                            </div>
                            <div class = "form-group">
                                <label>Picture:</label>
                                <input type = "file" id="addfortnership-pict-input" name = "addfortnership-pict-input" class = "form-control" required="true" required="required" />
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
