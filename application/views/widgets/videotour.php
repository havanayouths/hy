<section class="widget has-divider">
        <h3 class="section-heading line text-highlight">Video Tour</h3>
        <?php $i = 0; ?>
        <?php if(isset($wvideos)) : foreach($wvideos as $row) : if ($i == 1) { break; }  ?>    
        <?php $key = $row->url; ?>
        <?php echo '<iframe class="iframe" src="//www.youtube.com/embed/' . $key . '?rel=0&amp;wmode=transparent" allowfullscreen="" frameborder="0" ></iframe>';?>
        <?php $i++; endforeach;?>
        <?php else : ?>
        <h6>No records </h6>
        <?php endif; ?>
</section><!--//widget-->