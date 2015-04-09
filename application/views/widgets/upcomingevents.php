<section class="widget has-divider">
                                <h3 class="section-heading line text-highlight">Upcoming Events</h3>
                                <?php $i = 0; ?>
                                <?php foreach($events as $event): if ($i == 4) { break; }?>
                                <article class="events-item row page-row">                                    
                                        <div class="date-label-wrapper col-md-3 col-sm-4 col-xs-4">
                                            <?php $date = $event->date;?>
                                                <?php 
                                                    $aDate = explode("-", $date);
                                                    $year = $aDate[2];
                                                    $month= $aDate[1];
                                                    if($month == 1){
                                                        $month = "JAN";
                                                      } elseif ($month == 2) {
                                                       $month = "FEB";
                                                        }
                                                        elseif ($month == 3) {
                                                       $month = "MAR";
                                                        }
                                                        elseif ($month == 4) {
                                                       $month = "APR";
                                                        }
                                                        elseif ($month == 5) {
                                                       $month = "MAY";
                                                        }
                                                        elseif ($month == 6) {
                                                       $month = "JUN";
                                                        }
                                                        elseif ($month == 7) {
                                                       $month = "JUL";
                                                        }
                                                        elseif ($month == 8) {
                                                       $month = "AUG";
                                                        }
                                                        elseif ($month == 9) {
                                                       $month = "SEP";
                                                        }
                                                        elseif ($month == 10) {
                                                       $month = "OCT";
                                                        }
                                                        elseif ($month == 11) {
                                                       $month = "NOV";
                                                        }
                                                        else {
                                                     $month = "DEC";
                                                   }

                                                    $day = $aDate[0];
                                                ?>
                                            <p class="date-label">
                                                <span class="year"><?php echo $year; ?></span>
                                                <span class="month"><?php echo $month; ?></span>
                                                <span class="date-number"><?php echo $day; ?></span>
                                            </p>
                                        </div><!--//date-label-wrapper-->
                                        <div class="details col-md-9 col-sm-8 col-xs-8">
                                            <h5 class="title"><?php echo $event->title;?></h5>  
                                            <p class="meta"><span class="time"><i class="fa fa-clock-o"></i><?php echo $event->timefrom;?> - <?php echo $event->timeto;?></span><br><span class="location"><i class="fa fa-map-marker"></i><a href="#"><?php echo $event->location;?></a></span></p> 
                                            
                                        </div><!--//details-->                                    
                                </article>
                                <?php $i++;  endforeach;?>
                            </section><!--//widget-->