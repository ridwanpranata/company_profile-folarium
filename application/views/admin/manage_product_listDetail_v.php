            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                List Detail
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Manage Product</li>
                                <li>Product</li>
                                <li><a class="link-effect" href="">List Detail</a></li>
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
										
                                            <button class = "btn btn-success" style="margin-left: 15px;" type = "button" href = "#" data-toggle = "modal" data-target = "#add_listDetail"><span class = "glyphicon glyphicon-plus"></span> Add new list </button>
											<br>
                                            <div class="col-xs-12 col-md-3" ></div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="input_fields_wrap">
                                                    <?php $count = 0; ?>
                                                    <?php foreach ($list as $key): ?>
                                                        <?php $count++ ?>
                                                        <div><img style="width: 70%; max-height: 50%; margin: 20px auto;" class=""  alt="" src="<?php echo base_url(); ?>assets/admin/img/products/detail-pict/<?php echo $key->content_listDetail_item; ?>">
                                                        <a style="margin-left: 10%; margin-right: 0px;" href="#" class="btn btn-danger rlistListDetail_id"  name="<?php echo $key->content_listDetail_id;?>" data-toggle = "modal" data-target = "#delete"><span class="glyphicon glyphicon-remove"></span></a></div>
                                                    <?php endforeach ?>
                                                    <div id="countdata" data-count="<?php echo $count; ?>"></div>
                                                </div>
                                            </div>
                                            <div></div>
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
                <div class = "modal fade" id = "add_listDetail" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                	<div class = "modal-dialog" role = "document">
                		<div class = "modal-content panel-primary">
                			<div class = "modal-header panel-heading">
                				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                				<h4 class = "modal-title" id = "myModallabel">Add new Pict</h4>
                			</div>
                			<form method = "POST" action = "../add_listDetail" enctype = "multipart/form-data">
                				<div class  = "modal-body">
                					<div class = "form-group">
                						<label>Picture:</label>
                                        <input type="hidden" id="listDetail-title" name="listDetail-title" value="<?php echo $title; ?> ">
                                        <input type = "file" id="add-listDetail-input" name = "add-listDetail-input" required = "required" class = "form-control" />
                                        <img style="display: block; width: 40%; height: 40%; padding:10px; margin: 10px auto;" class="preview-img"  alt="">
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

            </main>
            <!-- END Main Container -->

	
	
