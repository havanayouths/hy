
<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

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
   
        <div class="logo">
            <h4><a href="<?php echo base_url()."index.php"?>">Havana <strong>Youth</strong></a></h4>
        </div>
        <nav  class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="">
                    <a href="<?php echo base_url('rprofile');?>"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('statistics');?>"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
                </li>
                <li class="">
                    <a href="index.html"><i class="fa fa-th"></i> <span class="name">Notifications</span></a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('calendar');?>"><i class="fa fa-calendar"></i> <span class="name">Calender</span></a>
                </li>
                <li class="">
                    <a href="index.html"><i class="fa fa-inbox"></i> <span class="name">Inbox</span></a>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">Search</span></a>
                    <ul id="ui-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="<?php echo site_url('youthsearch');?>">Unemployed Youth</a></li>
                        <li class=""><a href="ui_dialogs.html">Jobs</a></li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="<?= site_url('logout'); ?>"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                </li>
            </ul>
            
            <h5 class="sidebar-nav-title">Sponsors</h5>
            <!-- A place for sidebar notifications & alerts -->
            
        
        </nav>
<div class="wrap">    
    <div class="content container">
        <h2 class="page-title">Basic Stats <small>Tiles, bars and more</small></h2>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="description">
                        <strong>14</strong> meetings
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="big-text">
                        3.28%
                    </div>
                    <div class="description">
                        <i class="fa fa-user"></i>
                        User Growth
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="description">
                        <strong>643</strong> customers
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="big-text">
                        +512
                    </div>
                    <div class="description">
                        <i class="fa fa-comments"></i>
                        Comments
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="description">
                        <strong>410</strong> orders
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="big-text">
                        6.42%
                    </div>
                    <div class="description">
                        <i class="fa fa-arrow-right"></i>
                        Traffic Growth
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <section class="widget normal">
                    <header>
                        <h4>
                            <i class="fa fa-arrow-right"></i>
                            Progressbars
                        </h4>
                    </header>
                    <div class="body">
                        <h5 class="mt-0 mb-xs weight-normal">Simple one</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 60%;"></div>
                        </div>
                        <h5 class="mt-0 mb-xs weight-normal">Styled ones</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-inverse" style="width: 33%;"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 52%;"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" style="width: 43%;"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="widget normal">
                    <header>
                        <h4>
                            <i class="fa fa-caret-right"></i>
                            Small ones
                        </h4>
                    </header>
                    <div class="body">
                        <h5 class="mt-0 mb-xs weight-normal">Colors</h5>
                        <div class="progress progress-small">
                            <div class="progress-bar progress-bar-inverse" style="width: 23%;"></div>
                        </div>
                        <div class="progress progress-small">
                            <div class="progress-bar progress-bar-warning" style="width: 76%;"></div>
                        </div>
                        <div class="progress progress-small">
                            <div class="progress-bar progress-bar-success" style="width: 43%;"></div>
                        </div>
                        <div class="progress progress-small">
                            <div class="progress-bar progress-bar-danger" style="width: 53%;"></div>
                        </div>
                        <h5 class="mt-0 mb-xs weight-normal">Default progressbar</h5>
                        <div class="progress progress-small">
                            <div class="progress-bar" style="width: 60%;"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="widget normal">
                    <header>
                        <h4>
                            <i class="fa fa-angle-right"></i>
                            Some extensions
                        </h4>
                    </header>
                    <div class="body">
                        <h5 class="mt-0 mb-xs weight-normal">With embedded percentage</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 79%;">79%</div>
                        </div>
                        <h5 class="mt-0 mb-xs weight-normal">Active one</h5>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" style="width: 51%;">51%</div>
                        </div>
                        <h5 class="mt-0 mb-xs weight-normal">Inversed progress-bar</h5>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-inverse" style="width: 64%;">64%</div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-magnet"></i>
                            Server Overview
                        </h4>
                    </header>
                    <div class="body">
                        <ul class="server-stats">
                            <li>
                                <div class="key pull-right">CPU</div>
                                <div class="stat">
                                    <div class="info">60% / 37&deg;C / 3.3 Ghz</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">Mem</div>
                                <div class="stat">
                                    <div class="info">29% / 4GB (16 GB)</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-warning" style="width: 29%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">LAN</div>
                                <div class="stat">
                                    <div class="info">6 Mb/s <i class="fa fa-caret-down"></i> &nbsp; 3 Mb/s <i class="fa fa-caret-up"></i></div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-danger" style="width: 48%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">Access</div>
                                <div class="stat">
                                    <div class="info">17 Mb/s <i class="fa fa-caret-up"></i> &nbsp; (+18%)</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-success" style="width: 64%;"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-md-3">
                <section class="widget widget-overview">
                    <header>
                        <h4>
                            <i class="fa fa-lightbulb"></i>
                            Stats Overview
                        </h4>
                    </header>
                    <div class="body">
                        <ul class="overall-stats">
                            <li>
                                <div class="icon pull-left">
                                    <i class="fa fa-user"></i>
                                </div>
                                <span class="key">Total Users</span>
                                <div class="value pull-right">
                                    <span class="badge badge-danger">7 541</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon pull-left">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <span class="key">Total Orders</span>
                                <div class="value pull-right">
                                    <span class="badge badge-warning">2 876</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon pull-left">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <span class="key">Desktop</span>
                                <div class="value pull-right">
                                    <span class="badge badge-info">68%</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon pull-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span class="key">Mobile</span>
                                <div class="value pull-right">
                                    <span class="badge badge-default">32%</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
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

<script src="assets/lib/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/lib/select2/select2.min.js"></script>
<script src="assets/lib/moment/moment.js"></script>
<script src="assets/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/lib/parsleyjs/dist/parsley.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/lib/gmaps/gmaps.js"></script>   
<script type="text/javascript" src="assets/js/map.js"></script>
<!-- page application js -->
<script src="assets/js/forms-account.js"></script>
<!-- common templates -->

<script src="assets/lib/d3/d3.min.js"></script>
        <script src="assets/lib/nvd3/nv.d3.min.js"></script>

        <!-- page application js -->
        <script src="assets/js/index.js"></script>
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

</body>
</html>