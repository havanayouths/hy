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
        <div class="logo">
        <h4><a href="index.html">Havana <strong>Youth</strong></a></h4>
        </div>
        <nav  class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="active">
                    <a href="<?php echo base_url('rprofile');?>"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="">
                    <a href="<?php echo base_url('statistics');?>"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('notifications');?>"><i class="fa fa-th"></i> <span class="name">Notifications</span></a>
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
                                <?=$user->firstname?>
                            </li>
                            <li role="presentation">
                                <a href="<?php site_url("yprofile");?>" class="link">
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
                    <li class="hidden-xs"><a href="<?= site_url('logout'); ?>"><i class="fa fa-sign-out"></i></a></li>
                   
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Search...">
                </form>
            </div>
        </header>       
        <div class="content container">
       <h4 class="mt-sm mb-xs"><?=$user->firstname?><small> Welcome</small></h4>
        <div class="row">
            <div class="col-md-9">
                <section class="widget">
                    <header>
                        <h5>
                            <i class="fa fa-user"></i>
                            Account profile
                        </h5>
                    </header>
                    <div class="body">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#information" data-toggle="tab">Personal Information</a></li>
                            <li><a href="#profile" data-toggle="tab">History</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dropdown3" data-toggle="tab">Personal Information</a></li>
                                    <li><a href="#dropdown4" data-toggle="tab">Technical Skills </a></li>
                                    <li><a href="#dropdown5" data-toggle="tab">Qualifications</a></li>
                                    <li><a href="#dropdown6" data-toggle="tab">Contact Details</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content" >
                            <div class="tab-pane fade in active" id="information">
                                <div class="row">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-8">
                                    <address>
                                        <div class="info"><strong>Plumbing</strong></div>
                                            <div class="progress progress-small">
                                                <div class="progress-bar progress-bar-success" style="width: 90%;"></div>
                                            </div>
                                   <div class="info"><strong>Tiling</strong></div>
                                            <div class="progress progress-small">
                                                <div class="progress-bar progress-bar-warning" style="width: 50%;"></div>
                                            </div> 
                                   <div class="info"><strong>Plastering</strong></div>
                                            <div class="progress progress-small">
                                                <div class="progress-bar progress-bar-danger" style="width: 30%;"></div>
                                            </div>
                                    </address>
                                </div>
                            </div>
                                <div>
                                <legend class="section">Personal Info</legend>
                                <h5><label class="col-sm-4" for="prefix">Name:</label></h5>
                                <div class="col-sm-4"><a><?=$user->firstname?></a></div></br></br>
                                <h5><label class="col-sm-4" for="prefix">Surname:</label></h5>
                                <div class="col-sm-4"><a><?=$user->lastname?></a></div></br></br>
                                <h5><label class="col-sm-4" for="prefix">Gender:</label></h5>
                                <div class="col-sm-4"><a><?=$user->gender?></a></div></br></br>
                                <h5><label class="col-sm-4" for="prefix">Date of Birth:</label></h5>
                                <div class="col-sm-4"><a><?=$user->birth_date?></a></div></br></br>
                                </div>
                                <div>
                                <legend class="section">Contact Info</legend>
                                <h5><label class="col-sm-4" for="prefix">Mobile:</label></h5>
                                <div class="col-sm-4"><a>0812222331</a></div></br></br>
                                <h5><label class="col-sm-4" for="prefix">Tel:</label></h5>
                                <div class="col-sm-4"><a>061 303 4900</a></div></br></br>
                                <h5><label class="col-sm-4" for="prefix">Email:</label></h5>
                                <h5><label class="col-sm-4" for="prefix">Fax:</label></h5>
                                <div class="col-sm-4"><a><?=$contact->fax?></a></div></br></br>
                                </div>
                                <div>
                                <legend class="section">Address</legend>
                                <h5><label class="col-sm-4" for="prefix">Adress:</label></h5>
                                <div class="col-sm-4"><a>15 Rurh Street Windhoek West </a></div></br>
                                <h5><label class="col-sm-4" for="prefix">City:</label></h5>
                                <div class="col-sm-4"><a>Windhoek</a></div></br>
                                <h5><label class="col-sm-4" for="prefix">Region:</label></h5>
                                <div class="col-sm-4"><a href="">Khomas</a></div></br>
                                <h5><label class="col-sm-4" for="prefix">Country:</label></h5>
                                <div class="col-sm-4"><a>Namibia</a></div></br></br>
                                </div>
                                <div>
                                <article class="map-section">
                                    <div id="map"></div><!--//map-->
                                </article>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="profile">
                             <div class="row">
                                <div class="col-sm-4">
                                   
                                </div>
                                <div class="col-sm-8">
                                    <address>
                                        <div class="info"><strong>Plumbing</strong></div>
                                            <div class="progress progress-small">
                                                <div class="progress-bar progress-bar-success" style="width: 90%;"></div>
                                            </div>
                                   <div class="info"><strong>Tiling</strong></div>
                                            <div class="progress progress-small">
                                                <div class="progress-bar progress-bar-warning" style="width: 50%;"></div>
                                            </div> 
                                   <div class="info"><strong>Plastering</strong></div>
                                            <div class="progress progress-small">
                                                <div class="progress-bar progress-bar-danger" style="width: 30%;"></div>
                                            </div>
                                    </address>
                                </div>
                            </div>
                                <div>
                                <legend class="section">Jobs</legend>
                                <div class="col-sm-4"><h5><labelfor="prefix">Job Type:</label></h5>
                                <a>Plumbing</a></div>
                                <div class="col-sm-4"><h5><label for="prefix">By who:</label></h5>
                                <a><?php echo $user_profile['name']; ?></a></div>
                                <div class="col-sm-4"><h5><label  for="prefix">Date of Activity:</label></h5>
                                <a>13/10/2014</a></div>
                                <legend></legend>
                                <div class="col-sm-4">
                                <h5><label for="prefix">Job Type:</label></h5>
                                <a>Tiling</a> </div>
                                <div class="col-sm-4">
                                <h5><label for="prefix">By who:</label></h5>
                                <a><?=$user_profile['name']?></a></div>
                                <div class="col-sm-4"><h5><label for="prefix"><strong>Date of Activity:</strong></label></h5>
                                <a>17/11/2014</a></div>
                                <legend></legend>
                                 <div class="col-sm-4"><h5><label for="prefix"><strong>Job Type:</strong></label></h5>
                                Car Wash</div>
                                <div class="col-sm-4"><h5><label for="prefix"<strong>By who:</strong></label></h5>
                                <a><?=$user_profile['name']?></a></div>
                                <div class="col-sm-4"><h5><label for="prefix"><strong>Date of activity:</strong></label></h5>
                                <a>21/10/2014</a></div>
                                <legend></legend>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dropdown3">
                                <p>Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown4">
                                <p>They sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown6">
                                <div class="row">
                                          <div class="col-md-5 col-sm-6 col-xs-12">
                                                <div class="well with-header">
                                                <div class="header bordered-blue">Add / Update Contacts</div>
                                                <div>
                                                            <form action="/havanayouth/createcontacts" method="post" accept-charset="utf-8">	
                                                                 <div class="footer-col-inner">
                                                                        <div class="form-group">
                                                                           <?php if(isset($contact)) :?>  
                                                                           <input type="hidden" name="id"  value="<?php echo $contact->id?>" />
                                                                           <input name="mobile" type="text" id="mobile" class="form-control" value="<?php echo $contact->mobile_phone?>" /><br>
                                                                           <input name="tel" type="text" id="tel" class="form-control" value="<?php echo $contact->telephone?>" /><br>
                                                                           <input name="fax" type="text" id="fax" class="form-control" value="<?php echo $contact->fax?>" /><br>
                                                                           <input name="email" type="text" id="email" class="form-control" value="<?php echo $contact->email?>" />
                                                                            <?php else : ?>
                                                                            <h6>No records </h6>
                                                                            <?php endif; ?>
                                                                           <br>
                                                                            <input type="submit" id="submit" name="dsubmit" value="Update">
                                                                        </div>
                                                                   </div><!--//footer-col-inner-->
                                                            </form>
                                                            
                                                   </div> <!-- /content -->
                                               </div><!--//row-->
                                            </div>
                                          <div class="footer-col col-md-7 col-sm-8 newsletter">
                                              <div class="well with-header">
                                                      <div class="header bordered-blue">Your Current Details</div>
                                                                <?php if(isset($contact)) :   ?>    
                                                                <h0><strong>Mobile: </strong><?php echo $contact->mobile_phone?></h0></br>
                                                                <h0><strong>Tel: </strong><?php echo $contact->telephone?></h0></br>
                                                                <h0><strong>Fax: </strong><?php echo $contact->fax?></h0></br>
                                                                <h0><strong>Email: </strong><?php echo $contact->email?></h0></br>
                                                                 <p><?php echo anchor("/delete/$contact->id/contacts",'<span class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color:white"></i>delete contact</span>' ) ?></p>                                          
                                                               
                                                                <?php else : ?>
                                                                <h6>No records </h6>
                                                                <?php endif; ?>
                                              </div>
                                          </div>
                                          </div>
                           </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-3">
                <section class="widget large">
                    <header>
                        <h4>
                            Alerts Feed &nbsp;
                            <span class="label label-success">412</span>
                        </h4>
                        <div class="actions">
                            <button class="btn btn-transparent btn-xs">Show All <i class="fa fa-arrow-down"></i></button>
                        </div>
                    </header>
                    <div class="body">
                        <div id="feed" class="feed">
                            <div class="wrapper">
                                <div class="vertical-line"></div>
                                <section class="feed-item">
                                    <div class="icon pull-left">
                                        <i class="fa fa-comment"></i>
                                    </div>
                                    <div class="feed-item-body">
                                        <div class="text">
                                            <a href="#">John Doe</a> commented on <a href="#">What Makes Good Code Good</a>.
                                        </div>
                                        <div class="time pull-left">
                                            3 h
                                        </div>
                                    </div>
                                </section>
                                <section class="feed-item">
                                    <div class="icon pull-left">
                                        <i class="fa fa-check color-green"></i>
                                    </div>
                                    <div class="feed-item-body">
                                        <div class="text">
                                            <a href="#">Merge request #42</a> has been approved by <a href="#">Jessica Lori</a>.
                                        </div>
                                        <div class="time pull-left">
                                            10 h
                                        </div>
                                    </div>
                                </section>
                                <section class="feed-item">
                                    <div class="icon pull-left">
                                        <img src="img/14.jpg" class="img-circle" alt="">
                                    </div>
                                    <div class="feed-item-body">
                                        <div class="text">
                                            New user <a href="#">Greg Wilson</a> registered.
                                        </div>
                                        <div class="time pull-left">
                                            Today
                                        </div>
                                    </div>
                                </section>
                                <section class="feed-item">
                                    <div class="icon pull-left">
                                        <i class="fa fa-bolt color-orange"></i>
                                    </div>
                                    <div class="feed-item-body">
                                        <div class="text">
                                            Server fail level raises above normal. <a href="#">See logs</a> for details.
                                        </div>
                                        <div class="time pull-left">
                                            Yesterday
                                        </div>
                                    </div>
                                </section>
                                <section class="feed-item">
                                    <div class="icon pull-left">
                                        <i class="fa fa-database"></i>
                                    </div>
                                    <div class="feed-item-body">
                                        <div class="text">
                                            <a href="#">Database usage report</a> is ready.
                                        </div>
                                        <div class="time pull-left">
                                            Yesterday
                                        </div>
                                    </div>
                                </section>
                                <section class="feed-item">
                                    <div class="icon pull-left">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="feed-item-body">
                                        <div class="text">
                                            <a href="#">Order #233985</a> needs additional processing.
                                        </div>
                                        <div class="time pull-left">
                                            Wednesday
                                        </div>
                                    </div>
                                </section>
                                <section class="feed-item">
                                    <div class="icon pull-left">
                                        <i class="fa fa-arrow-down"></i>
                                    </div>
                                    <div class="feed-item-body">
                                        <div class="text">
                                            <a href="#">Load more...</a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="widget" id="news-widget" data-widgster-load="server/php/widgets/news.php">
                    <header>
                        <h5>
                            News & Events <span class="badge badge-success">17</span>
                        </h5>
                        <span class="text-muted">spinning refresh button & close prompt</span>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                            <a data-widgster="load" title="I am spinning!" href="#"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <ul class="news-list stretchable">
                            <li>
                                <span class="icon background-warning">
                                    <i class="fa fa-star"></i>
                                </span>
                                <div class="news-item-info">
                                    <h5 class="name"><a href="#">First Human Colony on Mars</a></h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit............
                                    </p>
                                    <div class="time"><i class="fa fa-clock-o"></i> Mar 20, 18:46</div>
                                    <div class="location"><i class="fa fa-map-marker"></i> Windhoek</div>
                                </div>
                            </li>
                            <li>
                                <span class="icon background-info">
                                    <i class="fa fa-microphone"></i>
                                </span>
                                <div class="news-item-info">
                                    <h5 class="name"><a href="#">Light Blue reached $300</a></h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    </p>
                                    <div class="time"><i class="fa fa-clock-o"></i> Sep 25, 11:59</div>
                                </div>
                            </li>
                            <li>
                                <span class="icon background-lime">
                                    <i class="fa fa-eye"></i>
                                </span>
                                <div class="news-item-info">
                                    <h5 class="name"><a href="#">No more spying</a></h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    </p>
                                    <div class="time"><i class="fa fa-clock-o"></i>Mar 20, 18:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="news-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="news-close-modal-label" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="news-close-modal-label">Sure?</h4>
                                </div>
                                <div class="modal-body">
                                    Do you really want to unrevertably remove this super news widget?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-danger" id="news-widget-remove">Yes, remove widget</button>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
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
<script src="assets/lib/slimScroll/jquery.slimscroll.min.js"></script>
<script src="assets/lib/jquery.sparkline/index.js"></script>

<script src="assets/lib/d3/d3.min.js"></script>
        <script src="assets/lib/nvd3/nv.d3.min.js"></script>

        <!-- page application js -->
        <script src="assets/js/index.js"></script>
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
    <script src="assets/lib/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="assets/lib/underscore/underscore.js"></script>
        <script src="assets/lib/backbone/backbone.js"></script>
        <script src="assets/lib/backbone.paginator/lib/backbone.paginator.min.js"></script>
        <script src="assets/lib/backgrid/lib/backgrid.min.js"></script>
        <script src="assets/lib/backgrid-paginator/backgrid-paginator.js"></script>
        <script src="assets/lib/datatables/media/js/jquery.dataTables.min.js"></script>

        <!-- page application js -->
        <script src="assets/js/tables-dynamic.js"></script>
        <script src="assets/js/datatable/jquery.dataTables.min.js"></script>
        <script src="assets/js/datatable/ZeroClipboard.js"></script>
        <script src="assets/js/datatable/dataTables.tableTools.min.js"></script>
        <script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/datatable/datatables-init.js"></script>
        <script>
            InitiateSimpleDataTable.init();
            InitiateEditableDataTable.init();
            InitiateExpandableDataTable.init();
            InitiateSearchableDataTable.init();
        </script>
        <!-- page application js -->
  

</body>
</html>