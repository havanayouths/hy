<section class="widget row-divider">
                                <h3 class="section-heading line text-highlight">Safety Alerts</h3>
                                <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                       
                                    <div class="carousel-inner">
                                      <?php $i = 0; ?>
                                      <?php if(isset($alerts)  ) : foreach($alerts as $row) :  ?>
                                        <?php if ($i == 0):?>
                                        <div class="item active">
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Marco Antonio</span><br><h0><strong><?php echo $row->title; ?></strong></h0></br></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-2.png">
                                            </div>
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                <h0><strong><?php echo $row->content; echo $row->id; ?></strong></h0></br>
                                            </blockquote>              
                                        </div><!--//item-->
                                        <?php else : ?>
                                        <div class="item ">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                <h0><strong><?php echo $row->content; ?></strong></h0></br>
                                            </blockquote>
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Marco Antonio</span><br><h0><strong><?php echo $row->title; ?></strong></h0></br></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-2.png">
                                            </div>                 
                                        </div><!--//item-->
                                        <?php endif; ?> 
                                        <?php $i++;?>
                                        <?php  endforeach;?>
                                        <?php else : ?>
                                        <h6>No records </h6>
                                        <?php endif; ?> 
                                    </div><!--//carousel-inner-->
                                    
                                    <div class="carousel-controls">
                                        <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                                        <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                                    </div><!--//carousel-controls-->
                                </div><!--//testimonials-carousel-->                             
                            </section><!--//widget-->
                            
