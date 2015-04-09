<section class="widget has-divider">
            <h3 class="section-heading line text-highlight">Latest News</h3>
            <?php $i = 0; ?>
            <?php if(isset($news)) : foreach($news as $row) : if ($i == 4) { break; }  ?>    
            <article class="news-item row"> 
                <figure class="thumb col-md-2">
                    <img src="<?=base_url()?>assets/images/news/news-thumb-1.jpg" alt="" >
                </figure>
                <div class="details col-md-10">
                    <h4 class="title"><?php echo anchor("newspage/$row->id",$row->title ); ?></h4>
                </div>
            </article>
            <?php $i++;  endforeach;?>
            <?php else : ?>
            <h6>No records </h6>
            <?php endif; ?>
</section><!--//widget-->