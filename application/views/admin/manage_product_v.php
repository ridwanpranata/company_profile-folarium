            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                Product
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Manage Product</li>
                                <li><a class="link-effect" href="">Product</a></li>
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
                                                <p style="font-style: italic; margin-bottom: 0px;">*Before add new peroduct, Please prepare your product picture</p>
                                                <p style="font-style: italic; margin-bottom: 0px; ">*800 x 600 px is recommended</p>
                                            </div>
                                            <button class = "btn btn-success" style="margin-left: 15px;" type = "button" href = "#" data-toggle = "modal" data-target = "#add_product"><span class = "glyphicon glyphicon-plus"></span> Add new </button>
											<br>
                                            <div style="clear: both;"></div>
                                            <?php foreach ($product as $key): ?>
                                            <div class="col-lg-4" style="margin-top: 20px;">
                                                <div class="box-product" style="background-color: rgba(209, 236, 255,.9); border-color: black; border-width: 10px">
                                                    <h1 style="text-align: center; font-size: 24px; padding: 10px;"><?php echo $key->content_product_title; ?></h1>
                                                    <img style=" height: 180px" class="img-responsive" src="<?php echo base_url(); ?>assets/admin/img/products/<?php echo $key->content_product_pict; ?>" alt="Picture">
                                                    <div style="text-align: center; padding: 10px; position: absolute; bottom:0px; right: 5%;">
                                                        <a class = "btn btn-warning  eproduct_id" name = "<?php echo $key->content_product_id?>" href = "#" data-toggle = "modal" data-target = "#edit_product"><span class = "glyphicon glyphicon-edit"></span></a></span></a>
                                                        <a class = "btn btn-danger rproduct_id" name = "<?php echo $key->content_product_id; ?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a>
                                                        <div class="btn-group dropup">
                                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                                                <span class="glyphicon glyphicon-triangle-top"></span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li class="dropdown-header">System</li>
                                                                <li>
                                                                    <a class = "eproposal_id" name = "<?php echo $key->content_product_id?>" href = "#" data-toggle = "modal" data-target = "#edit_proposal">Proposal</a></span></a>
                                                                </li>
                                                                <li>
                                                                    <a class = "eproduct_detail_id" name = "<?php echo $key->content_product_id?>" href = "#" data-toggle = "modal" data-target = "#edit_detail_pict">Detail Pict</a></span></a>
                                                                </li>
                                                                <li>
                                                                    <a class = "" name = "<?php echo $key->content_product_id?>" href = "manage_product_c/listDetail/<?php echo $key->content_product_title; ?>">List Detail Pict</a></span></a>
                                                                </li>
                                                                <li>
                                                                    <a class = "eproduct_others_id" name = "<?php echo $key->content_product_id?>" href = "#" data-toggle = "modal" data-target = "#edit_detail_others">Others Pict</a></span></a>
                                                                </li>
                                                                <li>
                                                                    <a class = "eproduct_demoLink_id" name = "<?php echo $key->content_product_id?>" href = "#" data-toggle = "modal" data-target = "#edit_detail_demoLink">Demo Link</a></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
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
                <div class = "modal fade" id = "add_product" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                	<div class = "modal-dialog" role = "document">
                		<div class = "modal-content panel-primary">
                			<div class = "modal-header panel-heading">
                				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                				<h4 class = "modal-title" id = "myModallabel">Add new Product</h4>
                			</div>
                			<form method = "POST" action = "manage_product_c/add" enctype = "multipart/form-data">
                				<div class  = "modal-body">
                					<div class = "form-group">
                						<label>Title:</label>
                						<input type = "text" name = "addproduct-title-input" required = "required" class = "form-control" />
                					</div>
                					<div class = "form-group">
                						<label>Short Description:</label>
                						<input type = "text" name = "addproduct-desc-input" required = "required" class = "form-control" />
                					</div>
                					<div class = "form-group">
                						<label>Detail:</label>
                                        <textarea class = "form-control editTextarea" name="addproduct-detail-input" id="" required = "required" cols="30" rows="5" placeholder = "Detail About Product" ></textarea>
                					</div>
                					<div class = "form-group">
                						<label>Picture:</label>
                                        <input type = "file" id="addproduct-pict-input" name = "addproduct-pict-input" required = "required" class = "form-control" />
                                        <img style="display: block; width: 40%; height: 40%; padding:10px; margin: 10px auto;" class="preview-img"  alt="">
                					</div>
                					<div class = "form-group">
                						<label>Best Seller:</label>
                						<br>
                						<input type = "radio" name = "addproduct-best-input" value="yes" class = "" /> Yes <br>
                						<input type = "radio" name = "addproduct-best-input" value="no" checked="" class = "" /> No <br>
                						<br>
                					</div>
                				</div>
                				<div class = "modal-footer">
                					<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
                				</div>
                			</form>
                		</div>
                	</div>
                </div>

                <div class = "modal fade" id = "edit_product" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                	<div class = "modal-dialog" role = "document">
                		<div class = "modal-content panel-warning">
                			<div class = "modal-header panel-heading">
                				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                				<h4 class = "modal-title" id = "myModallabel">Edit Product</h4>
                			</div>
                			<div id = "edit_modal_product"></div>
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

                <div class = "modal fade" id = "edit_proposal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                    <div class = "modal-dialog" role = "document">
                        <div class = "modal-content panel-warning">
                            <div class = "modal-header panel-heading">
                                <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                                <h4 class = "modal-title" id = "myModallabel">Edit Proposal</h4>
                            </div>
                            <div id = "edit_modal_product_proposal"></div>
                        </div>
                    </div>
                </div>

                <div class = "modal fade" id = "edit_detail_pict" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                    <div class = "modal-dialog" role = "document">
                        <div class = "modal-content panel-warning">
                            <div class = "modal-header panel-heading">
                                <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                                <h4 class = "modal-title" id = "myModallabel">Edit Detail Picture</h4>
                            </div>
                            <div id = "edit_modal_product_detail"></div>
                        </div>
                    </div>
                </div>

                <div class = "modal fade" id = "edit_detail_others" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                    <div class = "modal-dialog" role = "document">
                        <div class = "modal-content panel-warning">
                            <div class = "modal-header panel-heading">
                                <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                                <h4 class = "modal-title" id = "myModallabel">Edit Others Picture</h4>
                            </div>
                            <div id = "edit_modal_product_others"></div>
                        </div>
                    </div>
                </div>

                <div class = "modal fade" id = "edit_detail_demoLink" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                    <div class = "modal-dialog" role = "document">
                        <div class = "modal-content panel-warning">
                            <div class = "modal-header panel-heading">
                                <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                                <h4 class = "modal-title" id = "myModallabel">Edit Demo Link</h4>
                            </div>
                            <div id = "edit_modal_product_demoLink"></div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- END Main Container -->

	
	
