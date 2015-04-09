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
        
            
            
            <h5 class="sidebar-nav-title">Sponsors</h5>
            <!-- A place for sidebar notifications & alerts -->
            <div class="sidebar-alerts">
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">MTC</span> <br>
                        <img src="assets/img/jpeg/mtc.jpg" alt="Second slide">
                </div>
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Fnb</span> <br>
                    <img src="assets/img/jpeg/fnb.jpg" alt="Second slide" height="10%" width="100%">
                </div>
            </div>
        
        </nav> 