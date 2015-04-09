<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>
<head>
    <title>Havana youth</title>

    <link href="<?=base_url()?>css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body class="background-dark">
        <div class="landing" ">
            <div class="container">
                <header class="page-header">
                    <div class="navbar">
                        <div class="logo pull-left">
                            <h4><a href="index.html">Havana <strong>Youth</strong></a> <small>Jobs</small>&nbsp;&nbsp;
                                <a href="../icon/facebook-square" style="color: white;"><i class="fa fa-facebook-square "></i></a>&nbsp;
                            <a href="../icon/facebook-square" style="color: white;"><i class="fa fa-skype "></i></a>&nbsp;
                            <a href="../icon/facebook-square" style="color: white;"><i class="fa fa-twitter "></i></a>&nbsp;
                            <a href="../icon/facebook-square" style="color: white;"><i class="fa fa-google "></i></a></h4>
                        </div>
                        <ul class="nav navbar-nav pull-right navbar-menu hidden-xs">
                            <li class="active">
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#about">
                                    About
                                </a>
                            </li>
                            
                        <ul class="navbar-buttons pull-right">
                            <li>
                                <a href="<?php echo site_url('signin');?>" class="btn btn-sm btn-transparent">
                                    login&nbsp;
                                    <i class="fa fa-sign-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href=""
                              <button type="button" class="btn btn-sm btn-transparent"
                                data-toggle="modal" data-target="#myModal2" data-backdrop="static">Launch Register&nbsp<i class="fa fa-user"></i></button>                            
                                </a>
                                <div id="myModal2" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                               <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel2">Havana <strong>Youth </strong>account registration</h4>
                                    </div>
                                    <div class="modal-body">
                                
                                              <form action="<?php echo site_url('signup_validation')?>"  id="validation-form" class="form-horizontal form-label-left" method="post"
                                                    data-parsley-priority-enabled="false" accept-charset="utf-8" class="no-margin"
                                                    novalidate="novalidate">

                                                  <fieldset>
                                                      <legend class="section">
                                                      <span class="label label-custom">
                                                          Personal Info&nbsp;&nbsp;<i class="fa fa-user"></i>
                                                      </span>
                                                          <span class="label label-custom pull-right" style="background-color:#3b5998;">   
                                                                <a href="fbsignupa" class="btn btn-block btn-social btn-facebook btn-xs"><i class="fa fa-facebook"></i> Sign up with Facebook</a>
                                                          </span>
                                                      </legend>
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2" for="firstname">
                                                          </label>
                                                          <div class="col-md-5">
                                                          <label class="control-label" for="firstname">
                                                              Firstname<span class="required">&nbsp;*</span>
                                                          </label>
                                                          
                                                              <input placeholder="Please type your first name here" type="firstname" id="firstname" name="firstname" class="form-control input-transparent input-sm"
                                                                     data-parsley-trigger="change"
                                                                     data-parsley-validation-threshold="1"
                                                                     required="required">
                                                          </div>
                                                          <div class="col-md-5">
                                                           <label class="control-label " for="lastname">
                                                              Lastname<span class="required">&nbsp;*</span>
                                                          </label>
                                                              <input placeholder="Please type your last name / surname here" type="lastname" id="lastname" name="lastname" class="form-control input-transparent input-sm"
                                                                     data-parsley-trigger="change"
                                                                     data-parsley-validation-threshold="1"
                                                                     required="required">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2" for="username">
                                                              Username<span class="required">&nbsp;*</span>
                                                          </label>
                                                          <div class="col-md-10">
                                                              <input placeholder="Please type your user name here" type="username" id="lastname" name="username" class="form-control input-transparent input-sm"
                                                                     data-parsley-trigger="change"
                                                                     data-parsley-validation-threshold="1"
                                                                     required="required">
                                                          </div>
                                                      </div>
                                                      
                                                      
                                                  </fieldset>
                                                  <fieldset>
                                                     
                                                      <div class="form-group">
                                                            <label class="control-label col-md-2" for="email">
                                                                E-mail
                                                            </label>
                                                            <div class="col-md-10">
                                                                <div class="input-group">
                                                                <input placeholder="Please type your email address here"type="email" id="email" name="email" class="form-control input-transparent"
                                                                       data-parsley-trigger="change"
                                                                       data-parsley-validation-threshold="1"
                                                                       required="required"><span style="color: white;"class="input-group-addon" d><i class="fa fa-envelope"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2" for="number">
                                                             Contact Number
                                                          </label>
                                                          <div class="col-md-10">
                                                              <div class="input-group">
                                                              <input placeholder="Please type your contact number here" type="text" id="number" name="number" class="form-control input-transparent"
                                                                     data-parsley-type="number"
                                                                     required="required"><span style="color: white;"class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </fieldset>
                                                  <fieldset>
                                                      <legend class="section">
                                                          <span class="label label-custom">
                                                          Security Details&nbsp;&nbsp;<i class="fa fa-lock"></i>
                                                          </span>
                                                      </legend>
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2" for="password">
                                                              Password<span class="required">&nbsp;*</span>
                                                          </label>
                                                          <div class="col-md-10">
                                                              <div class="input-group">
                                                              <input placeholder="Type your password here" type="password" id="password" name="password" class="form-control input-transparent"
                                                                     data-parsley-trigger="change"
                                                                     data-parsley-minlength="6"
                                                                     required="required"><span style="color: white;"class="input-group-addon" ><i class="fa fa-lock"></i></span>
                                                              
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2" for="password">
                                                              Password Repeat<span class="required">&nbsp;*</span>
                                                          </label>
                                                          <div class="col-md-10">
                                                              <div class="input-group">
                                                              <input placeholder="Type your password here" type="password" id="password-r" name="password-r" class="form-control input-transparent"
                                                                     data-parsley-trigger="change"
                                                                     data-parsley-minlength="6"
                                                                     data-parsley-equalto="#password"
                                                                     required="required"><span style="color: white;"class="input-group-addon" ><i class="fa fa-lock"></i></span>
                                                              
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </fieldset>
                                                  <fieldset>
                                                     <div class="form-group">
                                                            <label class="control-label col-md-6" for="email">
                                                                <strong>What are you registering as?</strong>
                                                            </label>
                                                         <div class="col-md-6">
                                                            <div class="radio radio-primary pull-left">
                                                                <input type="radio" name="role" id="radio1" value="youth" checked>
                                                                <label for="radio1">
                                                                    Unemployed Youth
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-primary pull-right">
                                                                <input type="radio" name="role" id="radio2" value="employer">
                                                                <label for="radio2">
                                                                    Employer
                                                                </label>
                                                            </div>
                                                          </div>
                                                         </div>
                                                  </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="checkbox checkbox-primary pull-left col-md-4">
                                           
                                            <input name="checkButton2" type="checkbox" value="1" class="required step5 parsley-validated">
                                            <input id="checkbox3" type="checkbox" required data-parsley-mincheck="1">
                                                        <label for="checkbox3">
                                                            I Read and Agree With The <a href="">Terms & Conditions</a>
                                                        </label>
                                                    </div>
                                        
                                        <a href="<?php echo site_url('index.php');?>"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></a>
                                        <button type="submit" class="btn btn-primary">Register Your Account&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button><br>
                                        
                                    </div>
                                        </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                            </li>
                            
                        </ul>
                        </ul>
                    </div>
                </header>
                <div class="content">
                    <div id="carousel-landing" class="carousel slide carousel-landing carousel-fade">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-landing" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-landing" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-landing" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="animated fadeInLeftBig">
                                            <h1 class="slide-one-header">Havana <strong>Youth</strong> Jobs <br>Buidling Opportunities</h1>
                                            <p class="lead hidden-xs">
                                                Where <strong>recruiters</strong> meet <strong>seekers</strong> 
                                            </p>
                                            <p>
                                                <a href="#about" class="btn btn-lg btn-white">
                                                    About Us &nbsp; <i class="fa fa-angle-right"></i>
                                                </a>
                                                <a href="https://wrapbootstrap.com/theme/light-blue-responsive-admin-template-WB0T41TX4"
                                                   class="btn btn-lg btn-transparent">
                                                    Find a labourer at your fingertips today &nbsp; <i class="fa fa-search"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="text-align-center animated fadeInRightBig">
                                            <img src="assets/img/jpeg/youth.jpg" alt="Second slide">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <h1 class="slide-two-header text-align-center animated fadeInDown">
                                    Merging <strong>Seekers</strong> & <strong>Employers</strong>
                               
                                </h1>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="animated fadeInLeftBig">
                                            <p>
                                                <a href="index.html">
                                                    <img src="assets/img/jpeg/youth2.jpg" alt=""/>
                                                </a>
                                            </p>
                                            <p class="text-align-center">
                                                <a href="index.html" class="btn btn-transparent btn-lg btn-version-preview">
                                                    Preview &nbsp; <i class="fa fa-angle-right"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="animated fadeInRightBig">
                                            <p>
                                                <a href="../white/index.html">
                                                    <img src="assets/img/jpeg/white.jpg" alt=""/>
                                                </a>
                                            </p>
                                            <p class="text-align-center">
                                                <a href="../white/index.html" class="btn btn-white btn-lg btn-version-preview">
                                                    Preview &nbsp; <i class="fa fa-angle-right"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="animated fadeInLeft">
                                            <h1 class="slide-three-header">
                                                <strong>Fully</strong>
                                                <br>
                                                Responsive
                                            </h1>
                                            <p>
                                                <a href="http://www.responsinator.com/?url=demo.flatlogic.com%2F3.0" class="btn btn-white btn-lg" target="_blank">
                                                    Test It
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="animated fadeInUp" style="margin-top: 20px">
                                            <img src="assets/img/jpeg/light-blue-phone.png" alt=""/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control carousel-control-landing" href="#carousel-landing" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control carousel-control-landing" href="#carousel-landing" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        <!-- start about-->
            <div id="about" class="widget widget-white widget-about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-10">
                            <h2><strong>About Havana Youth</strong></h2>
                            <p>
                                <strong>Hvavana Youth</strong> - is a next generation of workers in namibia. Flat design and transparency - the
                                design that the world haven't seen before Havana Youth.
                            </p>
                            <div class="row features">
                                <div class="col-sm-4">
                                    <section class="feature">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <p>
                                        <span class="icon background-danger">
                                            <i class="fa fa-bold"></i>
                                        </span>
                                                </p>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>Bootstrap 3</h4>
                                                <p>
                                                    Light Blue comes with built-in Twitter Bootstrap 3 support.
                                                    Easy to design your next web app.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-sm-4">
                                    <section class="feature">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <p>
                                        <span class="icon background-warning">
                                            <i class="fa fa-magic"></i>
                                        </span>
                                                </p>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>Unique design</h4>
                                                <p>
                                                    Transparent widgets and gradient background - have you seen something like this
                                                    before?
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-sm-4">
                                    <section class="feature">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <p>
                                        <span class="icon background-success">
                                            <i class="fa fa-wrench"></i>
                                        </span>
                                                </p>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>Developer-friendly</h4>
                                                <p>
                                                    Simple, intuitive and easily maintainable code.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="row features">
                                <div class="col-sm-4">
                                    <section class="feature">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <p>
                                        <span class="icon background-primary">
                                            <i class="fa fa-superscript"></i>
                                        </span>
                                                </p>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>White & Transparent</h4>
                                                <p>
                                                    Two styles each having two background options.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-sm-4">
                                    <section class="feature">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <p>
                                        <span class="icon background-lime">
                                            <i class="fa fa-check"></i>
                                        </span>
                                                </p>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>Web applications</h4>
                                                <p>
                                                    LB itself is a web app. Plus there is an Email -
                                                    ready-to-use Backbone application.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-sm-4">
                                    <section class="feature">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <p>
                                        <span class="icon background-info">
                                            <i class="fa fa-css3"></i>
                                        </span>
                                                </p>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>Sass-powered</h4>
                                                <p>
                                                    Variables, mixins, includes - things that
                                                    make Light Blue really easy to customize.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="preview text-align-center">
                        <a href="../white/index.html" class="btn btn-lg btn-danger">
                            &nbsp; Preview the White Version &nbsp;
                        </a>
                    </p>
                </div>
            </div>
            
        <!-- start footer-->
            <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3>About</h3>
                        <ul>
                            <li><a href="about.html"><i class="fa fa-caret-right"></i>About us</a></li>
                            <li><a href="contact.html"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            <li><a href="privacy.html"><i class="fa fa-caret-right"></i>Privacy policy</a></li>
                            <li><a href="terms-and-conditions.html"><i class="fa fa-caret-right"></i>Terms & Conditions</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-6  col-sm-8 newsletter">
                    <div class="footer-col-inner">
                        <h3>Join our mailing list</h3>
                        <p>Subscribe to get our weekly newsletter delivered directly to your inbox</p>
                        <form class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <input class="btn btn-theme btn-subscribe" type="submit" value="Subscribe">
                        </form>
                        
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col--> 
                           <div class="footer-col col-md-3 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3>Contact us</h3>
                        <div class="row">
                            <p class="adr clearfix col-md-12 col-sm-4">
                                <i class="fa fa-map-marker pull-left"></i>        
                                <span class="adr-group pull-left">       
                                    <span class="street-address">Havana</span><br>
                                    <span class="region">56 Monte Christo Road</span><br>
                                    <span class="postal-code">Windhoek</span><br>
                                    <span class="country-name">Namibia</span>
                                </span>
                            </p>
                            <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i>0812222331</p>
                            <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="#">info@havanayouth.com</a></p>  
                        </div> 
                    </div><!--//footer-col-inner-->            
                </div><!--//foooter-col-->  
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2015 Havana Youth | Website by <a href="#">Sam Naholo</a></small>
                   
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
         </div>
<!-- common libraries. required for every page-->

<script src="assets/lib/jquery/dist/jquery.min.js"></script>
<script src="assets/lib/jquery-pjax/jquery.pjax.js"></script>
<script src="assets/lib/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
<script src="assets/lib/widgster/widgster.js"></script>
<script src="assets/lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/settings.js"></script>

    <script src="../../assets/js/landing.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page libs -->
        <script src="assets/lib/parsleyjs/dist/parsley.js"></script>

        <!-- page application js -->
        <script src="assets/js/forms-validation.js"></script>
</body>

</html>