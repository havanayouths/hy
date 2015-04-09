<!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">Inspection and Licensing Downloads</h4>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.html">Home</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="index.html">Downloads</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Inspection and Licensing</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <article class="courses-wrapper col-md-8 col-sm-7"> 
                            <div class="featured-courses tabbed-info page-row">             
                                <ul class="nav nav-tabs">
                                  <li  class="active"><a href="#tab1" data-toggle="tab"><h6><strong>Forms</strong></h6></a></li>
                                  <li><a href="#tab2" data-toggle="tab"><h6><strong>Guidelines</strong></h6></a></li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tab1">
                                      <div class="row">
                                          <?php foreach($forms as $item): echo 
                                                '<blockquote class="custom-quote">
                                                <p><i class="fa fa-file"></i>'.$item.'</p>
                                                '.anchor("/download_insforms/$item",'
                                                <span class="btn btn-theme btn-xs"><i class="fa fa-download" style="color:white"></i>download</span>' ).'
                                                </blockquote>';
                                                 endforeach;
                                          ?>
                                      </div><!--//row-->
                                  </div>
                                    <div class="tab-pane" id="tab2">
                                        <?php foreach($guidelines as $item): echo 
                                                '<blockquote class="custom-quote">
                                                <p><i class="fa fa-file"></i>'.$item.'</p>
                                                '.anchor("/download_insguidelines/$item",'
                                                <span class="btn btn-theme btn-xs"><i class="fa fa-download" style="color:white"></i>download</span>' ).'
                                                </blockquote>';
                                                 endforeach;
                                          ?>
                                    </div>
                                </div>
                            </div><!--//featured-courses-->
                        </article><!--//article-->
                        
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">      
                            <?php $this->load->view('widgets/quickdownloads');?>                                         
                        </aside>
                        
                        
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->
   