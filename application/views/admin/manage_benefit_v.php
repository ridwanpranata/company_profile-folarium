            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                Benefit
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Manage Benefit</li>
                                <li><a class="link-effect" href="">Benefit</a></li>
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
                                <div class="block-content">
                                    <div class = "container-fluid">
                                        <div class = "">
                                            <div style="float: right; ">
                                                <p style="font-style: italic; margin-bottom: 0px;">*Before add new benefit, Please prepare your benefit picture</p>
                                                <p style="font-style: italic; margin-bottom: 0px; ">*400 x 400 px is recommended</p>
                                            </div>
                                            <button class = "btn btn-success" style="margin-left:15px;" type = "button" href = "#" data-toggle = "modal" data-target = "#add_benefit"><span class = "glyphicon glyphicon-plus"></span> Add new </button>
                                            <br>
                                            <div style="clear: both;"></div>
                                            <?php foreach ($benefit as $key): ?>
                                            <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 20px;">
                                                <div style="background-color: #EDEDED; border-color: black; border-width: 10px; height: 400px; padding:20px; ">
                                                    
                                                    <img style="width:80px; height:80px;  margin: 0 auto; position: relative; top: 20px;" class="img-responsive" src="<?php echo base_url(); ?>assets/admin/img/benefit/<?php echo $key->content_benefit_pict; ?>" alt="Picture">
                                                    <h1 style="text-align: center; font-size: 20px; padding: 10px; position: relative; margin:20px; word-wrap:break-word;"><?php echo $key->content_benefit_title; ?></h1>
                                                    <p style="text-align: justify; word-wrap:break-word; "><?php echo $key->content_benefit_desc ?></p>
                                                    <div style="text-align: center; padding: 10px; position: absolute; bottom:0px; right: 5%;">
                                                        <a class = "btn btn-warning  ebenefit_id" name = "<?php echo $key->content_benefit_id?> " href = "#" data-toggle = "modal" data-target = "#edit_benefit"><span class = "glyphicon glyphicon-edit"></span></a>
                                                        <a class = "btn btn-danger rbenefit_id" name = "<?php echo $key->content_benefit_id; ?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Default Elements -->
                        </div>
                    </div>

                    <!-- END Bootstrap Design -->
                </div>
                <!-- END Page Content -->
                <div class = "modal fade" id = "add_benefit" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                	<div class = "modal-dialog" role = "document">
                		<div class = "modal-content panel-primary">
                			<div class = "modal-header panel-heading">
                				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                				<h4 class = "modal-title" id = "myModallabel">Add new benefit</h4>
                			</div>
                			<form method = "POST" action = "manage_benefit_c/add" enctype = "multipart/form-data">
                				<div class  = "modal-body">
                					<div class = "form-group">
                						<label>Title:</label>
                						<input type = "text" name = "addbenefit-title-input" required = "required" maxlength="30" class = "form-control" />
                					</div>
                					<div class = "form-group">
                						<label>Describe:</label>
                                        <textarea class="form-control editTextarea" name="addbenefit-desc-input" id="" cols="30" rows="3" maxlength="200" required="required"></textarea>
                					</div>
                					<div class = "form-group">
                						<label>Picture:</label>
                						<input type = "file" id="addbenefit-pict-input" name = "addbenefit-pict-input" class = "form-control" required="true" required="required" />
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

                <div class = "modal fade" id = "edit_benefit" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                	<div class = "modal-dialog" role = "document">
                		<div class = "modal-content panel-warning">
                			<div class = "modal-header panel-heading">
                				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                				<h4 class = "modal-title" id = "myModallabel">Edit benefit</h4>
                			</div>
                			<div id = "edit_modal_benefit"></div>
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

	
	
