            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                SEO Settings
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Settings</li>
                                <li><a class="link-effect" href="">SEO</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">

                    <!-- Bootstrap Design -->
                    <div class="row">
                        <div class=col-lg-12>
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
                                    <form class="form-horizontal" action="seo_c/edit" method="post">
                                        <input type="hidden" id="seo-id-input" name="seo-id-input" value="<?php echo $seo->seo_id; ?>">
                                        <div class="form-group">
                                            <label class="col-xs-12">Author</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="seo-author-input" name="seo-author-input" placeholder="Text.." value="<?php echo $seo->seo_author; ?>" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12" for="seo-desc-input">Description</label>
                                            <div class="col-xs-12">
                                                <textarea class="form-control" id="seo-desc-input" name="seo-desc-input" rows="6" placeholder="Describe your Company"><?php echo $seo->seo_description; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-12" for="seo-desc-input">Description</label>
                                            <div class="col-xs-12">
                                                <textarea class="form-control" id="seo-keyword-input" name="seo-keyword-input" rows="6" placeholder="Describe your Company"><?php echo $seo->seo_keyword; ?></textarea>
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