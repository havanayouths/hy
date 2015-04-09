
<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>
<head>
    <title>Havana Youth</title>

        <link href="css/application.css" rel="stylesheet">
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
    
   
      <div class="content container">
        <div class="modal-dialog">
            <div class="modal-content" style="color: black;">
                <div class="modal-header">
                    <h4 class="modal-title" >Havana <strong>Youth </strong>account sign up</h4>
                </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url('fbsignup')?>" id="validation-form" class="form-horizontal form-label-left" method="post"
                              data-parsley-priority-enabled="false"
                              novalidate="novalidate">
                            <fieldset>
                                <legend class="section">
                                <span class="label label-custom">
                                    Please provide your login credentials incase you are off facebook&nbsp;&nbsp;<i class="fa fa-user"></i>
                                </span>
                                    
                                </legend>
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2" for="number">
                                                             Mobile Number<span class="required">&nbsp;*</span>
                                                          </label>
                                                          <div class="col-md-10">
                                                              <div class="input-group">
                                                              <input placeholder="Please type your cell phone number here" type="text" id="number" name="number" class="form-control input-transparent"
                                                                     data-parsley-type="number"
                                                                     required="required"
                                                                     data-parsley-minlength="10"
                                                                     required="required"><span style="color: white;"class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                              </div>
                                                          </div>
                                                      </div>
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
                                                    <legend class="section">  </legend>
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
                                                     <div class="form-group">
                                                           <?php //echo validation_errors(); ?> 
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
                                        <button type="submit" class="btn btn-primary">Login Into Your Account&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                                    </div>
                        </form>
                    </div>
            </div>
        </div>
        
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
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
        <script src="assets/lib/parsleyjs/dist/parsley.min.js"></script>

        <!-- page application js -->
        <script src="assets/js/forms-validation.js"></script>

</body>
</html>