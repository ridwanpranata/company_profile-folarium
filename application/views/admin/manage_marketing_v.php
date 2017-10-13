            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                Marketing
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Manage marketing</li>
                                <li><a class="link-effect" href="">marketing</a></li>
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
											<button class = "btn btn-success" type = "button" href = "#" data-toggle = "modal" data-target = "#add_marketing"><span class = "glyphicon glyphicon-plus"></span> Add new </button>
											<br>
											<br>
											<table id = "tableMarketing" class = "table table-bordered display responsive no-wrap" width="100%">
												<thead class = "alert-info">
													<tr>
														<th>Username</th>
														<th>Name</th>
														<th>Email</th>
														<th>Edit</th>
														<th>Delete</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($marketing as $key): ?>
														<tr class="rowTableMarketing">
															<td><?php echo $key->user_username; ?></td>
															<td><?php echo $key->user_fname; ?> <?php echo $key->user_lname; ?></td>
															<td><?php echo $key->user_email; ?></td>
															<td><a class = "btn btn-warning  emarketing_id" name = "<?php echo $key->user_id?>" href = "#" data-toggle = "modal" data-target = "#edit_marketing"><span class = "glyphicon glyphicon-edit"></span></a></span></a> </td>
															<td><a class = "btn btn-danger rmarketing_id" name = "<?php echo $key->user_id; ?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a> </td>
														</tr>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
										<br />
										<br />	
										<br />	
									</div>
                                </div>
                            </div>
                            <!-- END Default Elements -->
                        </div>
                    </div>
                    <!-- END Bootstrap Design -->
                </div>
                <!-- END Page Content -->
                <div class = "modal fade" id = "add_marketing" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                	<div class = "modal-dialog" role = "document">
                		<div class = "modal-content panel-primary">
                			<div class = "modal-header panel-heading">
                				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                				<h4 class = "modal-title" id = "myModallabel">Add new marketing</h4>
                			</div>
                			<form method = "POST" action = "manage_marketing_c/add" enctype = "multipart/form-data">
                				<div class  = "modal-body">
                					<div class = "form-group">
                						<label>User Name:</label>
                						<input type = "text" name = "addmarketing-username-input" required = "required" class = "form-control" />
                					</div>
                					<div class = "form-group">
                						<label>First Name:</label>
                						<input type = "text" name = "addmarketing-fname-input" required = "required" class = "form-control" />
                					</div>
                					<div class = "form-group">
                						<label>Last Name:</label>
                						<input type = "text" name = "addmarketing-lname-input" placeholder = "(Optional)" class = "form-control" />
                					</div>
                                    <div class = "form-group">
                                        <label>Email:</label>
                                        <input type = "text" name = "addmarketing-email-input" placeholder = "(Optional)" class = "form-control" />
                                    </div>
                                    <div class = "form-group">
                                        <label>Bio :</label>
                                        <textarea class="form-control editTextarea" name="addmarketing-bio-input" id="" cols="30" rows="3" maxlength="200"></textarea>
                                    </div>
                                    <div class = "form-group">
                                        <label>User Phone :</label>
                                        <input type = "text" name = "addmarketing-phone-input" placeholder = "(Optional)" class = "form-control" />
                                    </div>
                                    <div class = "form-group">
                                        <label>Contact Line :</label>
                                        <input type = "text" name = "addmarketing-line-input" placeholder = "(Optional)" class = "form-control" />
                                    </div>
                                    <div class = "form-group">
                                        <label>Contact Pin BB</label>
                                        <input type = "text" name = "addmarketing-pinbb-input" placeholder = "(Optional)" class = "form-control" />
                                    </div>
                                    <div class = "form-group">
                                        <label>Profile Picture :</label>
                                        <input type = "file" id="addmarketing-pict-input" name = "addmarketing-pict-input" placeholder = "(Optional)" class = "form-control" required="" />
                                        <img style="display: block; width: 50%; height: 50%;" class="preview-img" alt="">
                                        <!-- <?php if ($this->session->flashdata('error')):?>
                                            <script>
                                                $('#add_marketing').modal('show');
                                            </script>
                                            <?php print_r($this->session->flashdata('error')); ?>
                                        <?php endif;?> -->
                                    </div>
                				</div>
                				<div class = "modal-footer">
                					<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
                				</div>
                			</form>
                		</div>
                	</div>
                </div>

                <div class = "modal fade" id = "edit_marketing" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                	<div class = "modal-dialog" role = "document">
                		<div class = "modal-content panel-warning">
                			<div class = "modal-header panel-heading">
                				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                				<h4 class = "modal-title" id = "myModallabel">Edit marketing</h4>
                			</div>
                			<div id = "edit_modal_marketing"></div>
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

	
	
