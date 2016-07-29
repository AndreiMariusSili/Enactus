<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin | Projects</title>
        <meta name="Enactus | Erasmus University Rotterdam" content="Europe's fastest start-up incubator">
        <meta name="author" content="htmlcoder.me">
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Crane Logo -->
        <link rel="shortcut icon" href="/assets/images/Logo_crane.png">
        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
        <!-- Bootstrap core CSS -->
        <link href="/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Fontello CSS -->
        <link href="/assets/fonts/fontello/css/fontello.css" rel="stylesheet">
        <!-- Plugins -->
        <link href="/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
        <link href="/assets/css/animate.css" rel="stylesheet">
        <link href="/assets/css/animations.css" rel="stylesheet">
        <link href="/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
        <link href="/assets/plugins/hover/hover-min.css" rel="stylesheet">
        <link href="/assets/plugins/morphext/morphext.css" rel="stylesheet">
        <link href="/assets/plugins/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet">
        
        <!-- The Project core CSS file -->
        <link href="/assets/css/style.css" rel="stylesheet" >
        <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
        <link href="/assets/css/skins/enactus_colors.css" rel="stylesheet">
        <!-- Custom css -->
        <link href="/assets/css/custom.css" rel="stylesheet">

        <?php $this->load->helper('form'); ?>
    </head>
    <body>
        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">
            
            <!-- header-container start -->
            <div class="header-container">
                
                <!-- header-top start -->
                <!-- classes:  -->
                <!-- "dark": dark version of header top e.g. class="header-top dark" -->
                <!-- "colored": colored version of header top e.g. class="header-top colored" -->
                <!-- ================ -->
                <div class="header-top dark ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-3 col-sm-6 col-md-9">
                                <!-- header-top-first start -->
                                <!-- ================ -->
                                <div class="header-top-first clearfix">
                                    <ul class="social-links circle small clearfix hidden-xs">
                                        <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                        <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                        <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                        <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
                                            <ul class="dropdown-menu dropdown-animation">
                                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                                <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="list-inline hidden-sm hidden-xs">
                                        <li><i class="fa fa-map-marker pr-5 pl-10"></i>One Infinity Loop Av, Tk 123456</li>
                                        <li><i class="fa fa-phone pr-5 pl-10"></i>+12 123 123 123</li>
                                        <li><i class="fa fa-envelope-o pr-5 pl-10"></i> theproject@mail.com</li>
                                    </ul>
                                </div>
                                <!-- header-top-first end -->
                            </div>
                            <div class="col-xs-9 col-sm-6 col-md-3">
                                <!-- header-top-second start -->
                                <!-- ================ -->
                                <div id="header-top-second"  class="clearfix">
                                    <!-- header top dropdowns start -->
                                    <!-- ================ -->
                                    <div class="header-top-dropdown text-right">
                                        <div class="btn-group">
                                            <a href="page-signup.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
                                        </div>
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login</button>
                                            <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                                <li>
                                                    <form class="login-form margin-clear">
                                                        <div class="form-group has-feedback">
                                                            <label class="control-label">Username</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                            <i class="fa fa-user form-control-feedback"></i>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label class="control-label">Password</label>
                                                            <input type="password" class="form-control" placeholder="">
                                                            <i class="fa fa-lock form-control-feedback"></i>
                                                        </div>
                                                        <button type="submit" class="btn btn-gray btn-sm">Log In</button>
                                                        <span class="pl-5 pr-5">or</span>
                                                        <button type="submit" class="btn btn-default btn-sm">Sing Up</button>
                                                        <ul>
                                                            <li><a href="#">Forgot your password?</a></li>
                                                        </ul>
                                                        <span class="text-center">Login with</span>
                                                        <ul class="social-links circle small colored clearfix">
                                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--  header top dropdowns end -->
                                </div>
                                <!-- header-top-second end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-top end -->
                
                <!-- header start -->
                <!-- classes:  -->
                <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
                <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
                <!-- "full-width": mandatory class for the full-width menu layout -->
                <!-- "centered": mandatory class for the centered logo layout -->
                <!-- ================ -->
                <header class="header  fixed    clearfix">  
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">                      
                                <!-- header-left start -->
                                <!-- ================ -->
                                <div class="header-left clearfix">
                                    
                                    <!-- main-navigation start -->
                                    <!-- classes: -->
                                    <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                    <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                    <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                                    <!-- ================ -->
                                    <div class="main-navigation onclick animated with-dropdown-buttons">
                                        <!-- navbar start -->
                                        <!-- ================ -->
                                        <nav class="navbar navbar-default" role="navigation">
                                            <div class="container-fluid">
                                                <!-- Toggle get grouped for better mobile display -->
                                                <div class="navbar-header">
                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    </button>
                                                    
                                                </div>
                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                    <!-- main-menu -->
                                                    <ul class="nav navbar-nav ">
                                                        <li>
                                                            <a href="/Admin/landing_admin">Landing</a>
                                                        </li>
                                                        <li>
                                                            <a href="#ventures">Ventures</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Admin/teams_admin_teams">Teams</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Admin/project_admin">Project Admin</a>
                                                        </li>
                                                    </ul>
                                                    <!-- main-menu end -->
                                                    
                                                </div>
                                            </div>
                                        </nav>
                                        <!-- navbar end -->
                                    </div>
                                    <!-- main-navigation end -->
                                </div>
                                <!-- header-left end -->
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!-- header-container end -->

            <!-- content-container start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Viewing</div>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/Admin/projects_view">View Projects</a></li>
                                <li class="list-group-item"><a href="/Admin/founders_view">View Founders</a></li>
                                <li class="list-group-item"><a href="/Admin/cofounders_view">View Cofounders</a></li>
                                <li class="list-group-item"><a href="/Admin/passives_view">View Passive Members</a></li>
                                <li class="list-group-item"><a href="/Admin/partners_view">View Partners</a></li>
                            </ul>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Creating</div>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/Admin/founders_create">Add New Founder</a></li>
                                <li class="list-group-item"><a href="/Admin/cofounders_create">Add New Cofounder</a></li>
                                <li class="list-group-item"><a href="/Admin/passives_create">Add New Passive Member</a></li>
                                <li class="list-group-item"><a href="/Admin/partners_create">Add New Partner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">Use this form to create a new cofounder</div>
                            <div class="panel-body">
                                        <form action="/Admin_edit/newCofounder" method="POST">
                                            <div class="form-group">
                                                <label>Input name of cofounder:</label>
                                                <input type="text" class="form-control" name="first_name" placeholder="John" style="margin-bottom: 1rem;"></input>
                                                <input type= "text" class="form-control" name="last_name" placeholder="Doe"></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Input contact details of cofounder:</label>
                                                <input type="email" class="form-control" name="email" placeholder="john.doe@example.com" style="margin-bottom: 1rem;">
                                                <input type="text" class="form-control" name="phone_number" placeholder="+31 6 123 456 78">
                                            </div>
                                            <div class="form-group">
                                                <label>Input cofounder date of birth:</label>
                                                <input type="date" class="form-control" name="dob" placeholder="dd/mm/yyyy"></input>
                                            </div>
                                            <div class="form-group">
                                                <label>Input cofounder study:</label>
                                                <select name="study" class="form-control">
                                                    <option></option>
                                                    <option value="IBA">IBA</option>
                                                    <option value="IBEB">IBEB</option>
                                                    <option value="IBCOM">IBCOM</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Input cofounder venture:</label>
                                                <select name="project_preference" class="form-control">
                                                    <option></option>
                                                    <option value="sMaaK">sMaaK</option>
                                                    <option value="Klik">Klik</option>
                                                    <option value="WhW">WhW</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Input cofounder motivation:</label>
                                                <textarea class="form-control" name="motivation" rows="5" placeholder="I want to help others help themselves."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                            <input type="hidden" name="status" value="cofounder"/>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>