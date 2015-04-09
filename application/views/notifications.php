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
    <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="active">
                    <a href="<?php echo base_url('rprofile');?>"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('statistics');?>"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
                </li>
                <li class="">
                    <a href="index.html"><i class="fa fa-th"></i> <span class="name">Notifications</span></a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('calender');?>"><i class="fa fa-calendar"></i> <span class="name">Calender</span></a>
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
                    <p><?php echo anchor("$logout_url",'<span class="name"><i class="fa fa-sign-out" style="color:white"></i>Sign Out</span>' ) ?></p>
                </li>
            </ul>            
            <?php $this->load->view('sponsors');?>
        
        </nav>   
    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-comments"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/1.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/2.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/3.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-group"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.jpg" alt="">
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Search...">
                </form>
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="#">settings</a> on the right!
                    </div>
                </div>
            </div>
        </header>        
        <div class="content container">
        <h2 class="page-title">Notifications</h2>
        <div class="clearfix">
            <div class="btn-toolbar">
                <div class="btn-group">
                    <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-default">
                        Popular <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">All</a></li>
                        <li><a href="#">Popular</a></li>
                        <li><a href="#">Interesting</a></li>
                        <li><a href="#">Latest</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-default">
                        All Time <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Last 24h</a></li>
                        <li><a href="#">Last Month</a></li>
                        <li><a href="#">Last Year</a></li>
                    </ul>
                </div>
                <div class="btn-group pull-right">
                    <button class="btn btn-transparent active" type="button"><i class="fa fa-th-list"></i></button>
                    <button class="btn btn-transparent" type="button"><i class="fa fa-th-large"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-lg-push-9">
                <h4>Results <span class="fw-semi-bold">Filtering</span></h4>
                <p class="text-muted">Listed content is categorized by the following groups:</p>
                <ul class="nav nav-pills nav-stacked search-result-categories mt">
                    <li>
                        <a href="#">
                            Hot Ideas
                            <span class="badge bg-gray fw-semi-bold">34</span>
                        </a>
                    </li>
                    <li><a href="#">
                        Latest Pictures
                        <span class="badge bg-gray fw-semi-bold">9</span>
                    </a></li>
                    <li><a href="#">Labels of Day</a></li>
                    <li>
                        <a href="#">
                            Recent Movies
                        </a>
                    </li>
                    <li>
                        <a href="#">Globals <span class="badge bg-gray fw-semi-bold">18</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 col-lg-pull-3">
                <p class="search-results-count">About 94 700 000 (0.39 sec.) results</p>
                <section class="search-result-item">
                    <a class="image-link" href="#">
                        <img class="image" src="assets/img/jpeg/1.jpg">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="search-result-item-heading">
                                    <a href="#">Next generation admin template</a>
                                </h4>
                                <p class="info">
                                    New York, NY 20188
                                </p>
                                <p class="description">
                                    Not just usual Metro. But something bigger. Not just usual widgets, but real
                                    widgets. Not just yet another admin template, but next generation admin template.
                                </p>
                            </div>
                            <div class="col-sm-3 text-align-center">
                                <p class="value3 mt-sm">
                                    $9, 700
                                </p>
                                <p class="fs-mini text-muted">
                                    PER WEEK
                                </p>
                                <a class="btn btn-primary btn-info btn-sm" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="search-result-item">
                    <a class="image-link" href="#">
                        <img class="image" src="assets/img/jpeg/6.jpg">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="search-result-item-heading">
                                    <a href="#">Try. Posted by Okendoken</a>
                                    <span class="badge bg-danger fw-normal">Best Deal!</span>
                                </h4>
                                <p class="info">
                                    Los Angeles, NY 20188
                                </p>
                                <p class="description">
                                    You will never know exactly how something will go until you try it. You can
                                    think three hundred times and still have no precise result.
                                </p>
                            </div>
                            <div class="col-sm-3 text-align-center">
                                <p class="value3 mt-sm">
                                    $10, 300
                                </p>
                                <p class="fs-mini text-muted">
                                    PER WEEK
                                </p>
                                <a class="btn btn-primary btn-info btn-sm" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="search-result-item">
                    <a class="image-link" href="#">
                        <img class="image" src="assets/img/jpeg/10.jpg">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="search-result-item-heading">
                                    <a href="#">Vitaut the Great</a>
                                </h4>
                                <p class="info">
                                    New York, NY 20188
                                </p>
                                <p class="description">
                                    The Great Prince of the Grand Duchy of Lithuania he had stopped the invasion to
                                    Europe of Timur (Tamerlan) from Asia heading a big Army of Belarusians, Lithuanians.
                                </p>
                            </div>
                            <div class="col-sm-3 text-align-center">
                                <p class="value3 mt-sm">
                                    $3, 200
                                </p>
                                <p class="fs-mini text-muted">
                                    PER WEEK
                                </p>
                                <a class="btn btn-info btn-sm" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="search-result-item">
                    <a class="image-link" href="#">
                        <img class="image" src="assets/img/5.jpg">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="search-result-item-heading">
                                    <a href="#">Can I use CSS3 Radial-Gradient?</a>
                                </h4>
                                <p class="info">
                                    Minsk, NY 20188
                                </p>
                                <p class="description">
                                    Yes you can! Further more, you should! It let's you create really beautiful images
                                    either for elements or for the entire background.
                                </p>
                            </div>
                            <div class="col-sm-3 text-align-center">
                                <p class="value3 mt-sm">
                                    $2, 400
                                </p>
                                <p class="fs-mini text-muted">
                                    PER MONTH
                                </p>
                                <a class="btn btn-info btn-sm" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="text-align-center">
                    <ul class="pagination pagination-sm pagination-search-result">
                        <li class="disabled"><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
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
        <!-- page specific libs -->

        <!-- page application js -->

</body>
</html>