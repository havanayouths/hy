 <div class="footer-col col-md-3 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3>Contact us</h3>
                        <?php if(isset($news)) : foreach($gencon as $row) :   ?>  
                        <div class="row">
                            <p class="adr clearfix col-md-12 col-sm-4">
                                <i class="fa fa-map-marker pull-left"></i>        
                                <span class="adr-group pull-left">       
                                    <span class="street-address"><?php echo $row->nam;?></span><br>
                                    <span class="region"><?php echo $row->street;?>, <?php echo $row->suburb;?></span><br>
                                    <span class="postal-code"><?php echo $row->town;?></span><br>
                                    <span class="country-name"><?php echo $row->country;?></span>
                                </span>
                            </p>
                            <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i><?php echo $row->tel;?></p>
                            <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="#"><?php echo $row->email;?></a></p>  
                        
                        </div> 
                        <?php endforeach;?>
                        <?php else : ?>
                        <h6>No records </h6>
                        <?php endif; ?>
                    </div><!--//footer-col-inner-->            
                </div><!--//foooter-col-->    