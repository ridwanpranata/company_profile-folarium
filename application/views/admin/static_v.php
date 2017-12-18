<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Folarium - Admin Web Marketing</title>

        <meta name="description" content="Folarium - Admin Web Marketing">
        <meta name="author" content="ridwan">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/admin/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/plugins/slick/slick-theme.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/js/plugins/dropzonejs/dropzone.min.css">

        <link rel = "stylesheet" href = "<?php echo base_url();?>assets/admin/css/jquery.dataTables.css" />
        <link rel = "stylesheet" href = "<?php echo base_url();?>assets/admin/css/dataTables.bootstrap.css" />
        <link rel = "stylesheet" href = "<?php echo base_url();?>assets/admin/css/responsive.bootstrap.css" />
        <link rel = "stylesheet" href = "<?php echo base_url();?>assets/admin/css/responsive.dataTables.css" />


        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url();?>assets/admin/css/oneui.css">

        <!-- Responsive datatable -->


        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?php echo base_url();?>assets/admin/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <div class="btn-group pull-right">
                                <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                    <i class="si si-drop"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                                    <li>
                                        <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="<?php echo base_url();?>assets/admin/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="<?php echo base_url();?>assets/admin/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="<?php echo base_url();?>assets/admin/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="<?php echo base_url();?>assets/admin/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="<?php echo base_url();?>assets/admin/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class="h5 text-white" href="#!"><span class="h4 font-w600 sidebar-mini-hide"> Folarium</span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                            <ul class="nav-main">
                                <li class="nav-main-heading"><span class="sidebar-mini-hide">User Interface</span></li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Company Profile</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/form_company_profile_c">Company Profile</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/form_fortnership_c">Circle Of Fortnership</a>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo base_url();?>admin/manage_header_c">Main Header</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>admin/manage_logo_c">Logo</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Manage Product</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/main_product_c">Main Title</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/manage_product_c">Manage Product</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Manage Benefit</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/main_benefit_c">Main Title</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/manage_benefit_c">Manage Benefit</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Manage Promo</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/main_promo_c">Main Title</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/manage_promo_c">Manage Promo</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                <img src="<?php echo base_url();?>assets/admin/img/avatars/avatar10.jpg" alt="Avatar">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">System</li>
                                <li>
                                    <a tabindex="-1" href="<?php echo base_url();?>index.php/admin/base_pages_profile_edit_c">
                                        <i class="si si-settings pull-right"></i>User Profile
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo base_url();?>index.php/admin/SEO_c">
                                        <i class="si si-magnifier pull-right"></i>SEO
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo base_url();?>admin/logout_c">
                                        <i class="si si-logout pull-right"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>   
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->

                <?php echo $contents; ?>

            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">ridwanpranata</a>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">ForAdmin 3.1</a> &copy; <span class="js-year-copy"></span>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Apps</h3>
                        </div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="<?php echo base_url();?>">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="frontend_home.html">
                                        <div class="block-content text-white bg-modern">
                                            <i class="si si-rocket fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Frontend</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Apps Block -->
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="<?php echo base_url();?>assets/admin/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/app.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/plugins/dropzonejs/dropzone.min.js"></script>


        <!-- Page JS Plugins from Validation Form -->
        <script src="<?php echo base_url();?>assets/admin/js/plugins/select2/select2.full.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/plugins/jquery-validation/additional-methods.min.js"></script>

        <script src = "<?php echo base_url();?>assets/admin/js/core/jquery.dataTables.js"></script>
        <script src = "<?php echo base_url();?>assets/admin/js/core/dataTables.bootstrap.js"></script>
        <script src = "<?php echo base_url();?>assets/admin/js/core/dataTables.responsive.js"></script>


        <script>
            $(document).ready(function() {
                var max_fields      = 5; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                var add_button      = $(".add_field_button_header"); //Add button ID
                
                // var x = 1;
                
                //initlal text box count
                var x = $("#countdata").attr("data-count");
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div ><input style="margin:10px; width: 350px;" type="text" name="header-list-input[]" required="required" ><a href="#" class="btn btn-danger remove_field"><span class="glyphicon glyphicon-remove"></span></a></div>'); //add input box
                    }
                });
                
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').remove(); x--;
                })
            });
        </script>

        <script>
            $(document).ready(function() {
                var max_fields      = 5; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                var add_button      = $(".add_field_button"); //Add button ID
                
                //initlal text box count
                var x = $("#countdata").attr("data-count");
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div ><input style="margin:10px; width: 250px;" type="text" name="cp-list_subdesc-input[]"><a href="#" class="btn btn-danger remove_field"><span class="glyphicon glyphicon-remove"></span></a></div>'); //add input box
                    }
                });
                
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').remove(); x--;
                })
            });
        </script>

        <script>
            $(document).ready(function() {
                var max_fields      = 5; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap_p1"); //Fields wrapper
                var add_button      = $(".add_field_button_p1"); //Add button ID
                
                //initlal text box count
                var x = $("#countdata_p1").attr("data-count");
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div ><input style="margin:10px; width: 350px;" type="text" name="promo-list-input[]" required="required" ><a href="#" class="btn btn-danger remove_field"><span class="glyphicon glyphicon-remove"></span></a></div>'); //add input box
                    }
                });
                
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').remove(); x--;
                })
            });
        </script>

        <script>
            $(document).ready(function() {
                var max_fields      = 6; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap_p2_1"); //Fields wrapper
                var add_button      = $(".add_field_button_p2_1"); //Add button ID
                
                //initlal text box count
                var x = $("#countdata_p2_1").attr("data-count");
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div ><input style="margin:10px; width: 350px;" type="text" name="promo2_1-list-input[]" required="required" ><a href="#" class="btn btn-danger remove_field"><span class="glyphicon glyphicon-remove"></span></a></div>'); //add input box
                    }
                });
                
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').remove(); x--;
                })
            });
        </script>

        <script>
            $(document).ready(function() {
                var max_fields      = 6; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap_p2_2"); //Fields wrapper
                var add_button      = $(".add_field_button_p2_2"); //Add button ID
                
                //initlal text box count
                var x = $("#countdata_p2_2").attr("data-count");
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div ><input style="margin:10px; width: 350px;" type="text" name="promo2_2-list-input[]" required="required"><a href="#" class="btn btn-danger remove_field"><span class="glyphicon glyphicon-remove"></span></a></div>'); //add input box
                    }
                });
                
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').remove(); x--;
                })
            });
        </script>

        <script>
            $(document).ready(function(){
                
                $('#add_fortnership').on('hidden.bs.modal', function (e) {

                    tinymce.activeEditor.setContent('');
                    $(this)
                        .find("input,textarea,select")
                           .val('')
                           .end()
                        .find("input[type=checkbox], input[type=radio]")
                           .prop("checked", "")
                           .end();

                    $("#add_fortnership img").attr("src"," ");      
                });

                $('#add_product').on('hidden.bs.modal', function (e) {

                    tinymce.activeEditor.setContent('');
                    $(this)
                        .find("input,textarea,select")
                           .val('')
                           .end()
                        .find("input[type=checkbox], input[type=radio]")
                           .prop("checked", "")
                           .end();

                    $("#add_product img").attr("src"," ");      
                });

                $('#add_benefit').on('hidden.bs.modal', function (e) {

                    tinymce.activeEditor.setContent('');
                    $(this)
                        .find("input,textarea,select")
                           .val('')
                           .end()
                        .find("input[type=checkbox], input[type=radio]")
                           .prop("checked", "")
                           .end();

                    $("#add_benefit img").attr("src"," ");      
                });

                $('#add_marketing').on('hidden.bs.modal', function (e) {

                    tinymce.activeEditor.setContent('');
                    $(this)
                        .find("input,textarea,select")
                           .val('')
                           .end()
                        .find("input[type=checkbox], input[type=radio]")
                           .prop("checked", "")
                           .end();

                    $("#add_marketing img").attr("src"," ");      
                });

                $('#add_listDetail').on('hidden.bs.modal', function (e) {

                    tinymce.activeEditor.setContent('');
                    $(this)
                        .find("input[type=file]")
                           .val('')
                           .end();

                    $("#add_listDetail img").attr("src"," ");      
                });

            });
        </script>
        
        <script type = "text/javascript">
            $(document).ready(function(){
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('.preview-img').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#addfortnership-pict-input").change(function(e){
                    e.preventDefault;
                    readURL(this);
                });
                
                $("#addmarketing-pict-input").change(function(e){
                    e.preventDefault;
                    readURL(this);
                });

                $("#addproduct-pict-input").change(function(e){
                    e.preventDefault;
                    readURL(this);
                });

                $("#addbenefit-pict-input").change(function(e){
                    e.preventDefault;
                    readURL(this);
                });

                $("#header-pict-input").change(function(e){
                    e.preventDefault;
                    readURL(this);
                });

                $("#logo-pict-input").change(function(e){
                    e.preventDefault;
                    readURL(this);
                });

                $("#add-listDetail-input").change(function(e){
                    e.preventDefault;
                    readURL(this);
                });

                $("#user-pict-input").change(function(e){
                    e.preventDefault;
                    readURL(this);
                });

            });
            
        </script>
        
        <script>
            $('#tableMarketing').DataTable( {
                responsive: true
            } );
        </script>
        
        <script type = "text/javascript">
            $(document).ready(function(){

                $('.rlistHeader_id').click(function(){
                    $header_id = $(this).attr('name');

                    $('.remove_id').click(function(){
                        window.location = 'manage_header_c/delete?content_list_id='+$header_id;

                    });

                });

                $('.rlistListDetail_id').click(function(){
                    $listDetail_id = $(this).attr('name');

                    $('.remove_id').click(function(){
                        window.location = '../deleteList?content_listDetail_id='+$listDetail_id;

                    });

                });         
            });
        </script>

        <script type = "text/javascript">
            $(document).ready(function(){
                $('.rlist_id').click(function(){
                    $product_id = $(this).attr('name');

                    $('.remove_id').click(function(){
                        window.location = 'form_company_profile_c/delete?content_list_id='+$product_id;
                    });
                });

                $('.rfortnership_id').click(function(){
                    $fortnership_id = $(this).attr('name');

                    $('.remove_id').click(function(e){
                        window.location = 'form_fortnership_c/delete?content_fortnership_id='+$fortnership_id;
                    });
                });
            });
        </script>

        <script type = "text/javascript">
            $(document).ready(function(){
                $('.eproduct_id').click(function(){
                    $product_id = $(this).attr('name');
                    $('#edit_modal_product').load("manage_product_c/loadEditProduct?content_product_id=" + $product_id);
                });

                $('.eproposal_id').click(function(){
                    $product_id = $(this).attr('name');
                    $('#edit_modal_product_proposal').load("manage_product_c/loadEditProductProposal?content_product_id=" + $product_id);
                });

                $('.eproduct_detail_id').click(function(){
                    $product_id = $(this).attr('name');
                    $('#edit_modal_product_detail').load("manage_product_c/loadEditProductDetail?content_product_id=" + $product_id);
                });

                $('.eproduct_others_id').click(function(){
                    $product_others_id = $(this).attr('name');
                    $('#edit_modal_product_others').load("manage_product_c/loadEditProductOthers?content_product_id=" + $product_others_id);
                });

                $('.eproduct_demoLink_id').click(function(){
                    $product_demoLink_id = $(this).attr('name');
                    $('#edit_modal_product_demoLink').load("manage_product_c/loadEditProductDemoLink?content_product_id=" + $product_demoLink_id);
                });

                $('.rproduct_id').click(function(){
                    $product_id = $(this).attr('name');

                    $('.remove_id').click(function(){
                        window.location = 'manage_product_c/delete?content_product_id='+$product_id;
                    });
                });
            });
        </script>

        <script type = "text/javascript">
            $(document).ready(function(){
                $('.ebenefit_id').click(function(){
                    $benefit_id = $(this).attr('name');
                    $('#edit_modal_benefit').load("manage_benefit_c/loadEditBenefit?content_benefit_id=" + $benefit_id);
                });


                $('.rbenefit_id').click(function(){
                    $benefit_id = $(this).attr('name');

                    $('.remove_id').click(function(e){
                        window.location = 'manage_benefit_c/delete?content_benefit_id='+$benefit_id;
                    });
                });
                
            });
            
        </script>
        

       <script type = "text/javascript">
            $(document).ready(function(){
                var table = $('#tableMarketing').DataTable();
                $('.emarketing_id').click(function(){
                   $marketing_id = $(this).attr('name');
                   $('#edit_modal_marketing').load("manage_marketing_c/loadEditMarketing?user_id=" + $marketing_id);
                });


                $('.rmarketing_id').click(function(){
                    $marketing_id = $(this).attr('name');

                    $('.remove_id').click(function(e){
                        window.location = 'manage_marketing_c/delete?content_marketing_id='+$marketing_id;
                    });
                });
               
           });
           
       </script>

        <script type = "text/javascript">
            $(document).ready(function(){
                $('.epromo_id').click(function(){
                    $benefit_id = $(this).attr('name');
                    $('#edit_modal_promo').load("manage_benefit_c/loadEditBenefit?content_benefit_id=" + $benefit_id);
                });

                $('.rpromo_id').click(function(){
                    $benefit_id = $(this).attr('name');

                    $('.remove_id').click(function(){
                        window.location = 'manage_promo_c/delete?content_promo_id='+$benefit_id;
                    });

                });

                $('.rlist_p1_id').click(function(){
                    $promo_list_id = $(this).attr('name');

                    $('.remove_id').click(function(){
                        window.location = 'manage_promo_c/delete?content_list_id='+$promo_list_id;
                    });
                });

                $('.rlist_p2_1_id').click(function(){
                    $promo_list_id = $(this).attr('name');

                    $('.remove_id').click(function(){
                        window.location = 'manage_promo_c/delete?content_list_id='+$promo_list_id;
                    });
                }); 

                $('.rlist_p2_2_id').click(function(){
                    $promo_list_id = $(this).attr('name');

                    $('.remove_id').click(function(){
                        window.location = 'manage_promo_c/delete?content_list_id='+$promo_list_id;
                    });
                });           
            });
        </script>
        
        <script>
            jQuery(function () {
                // Init page helpers (select2 + slick plugins)
                App.initHelpers(['select2','slick']);
            });
        </script>
        <script src="<?php echo base_url();?>assets/admin/js/pages/base_forms_validation.js"></script>


        <!-- Page Plugins from Dashboard-->
        <script src="<?php echo base_url();?>assets/admin/js/plugins/slick/slick.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/plugins/chartjs/Chart.min.js"></script>
        <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
        <script src="<?php echo base_url();?>assets/admin/js/plugins/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea.editTextarea',
                menubar : false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                ],
                toolbar: 'undo redo | bold italic underline | bullist numlist| link',
                content_css: [
                      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                      '//www.tinymce.com/css/codepen.min.css'],
                setup: function (editor) {
                    editor.on('change', function () {
                        editor.save();
                    });
                }
            });
        </script>


    </body>
</html>