            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                Benefit - Main Title
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Manage Benefit</li>
                                <li><a class="link-effect" href="">Main Title</a></li>
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
                                    <form class="form-horizontal" action="main_benefit_c/edit" method="post">

                                        <input type="hidden" id="main-benefit-id-input" name="main-benefit-id-input" value="<?php echo $main_benefit->main_content_id;?>">
                                        
                                        <div class="form-group">
                                            <label class="col-xs-12">Title</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="main-benefit-title-input" name="main-benefit-title-input" placeholder="Text.." value="<?php echo $main_benefit->main_content_title;?>" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12" for="main-benefit-desc-input">Describe</label>
                                            <div class="col-xs-12">
                                                <textarea class="form-control" id="main-benefit-desc-input" name="main-benefit-desc-input" rows="6" placeholder="Describe main Why Folarium"><?php echo $main_benefit->main_content_desc;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12">Title in Navbar</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="main-benefit-title-navbar-input" name="main-benefit-title-navbar-input" placeholder="Text.." value="<?php echo $main_benefit->main_content_title_navbar;?>" required="true">
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
            </main>
            <!-- END Main Container -->