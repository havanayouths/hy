<section class="widget">
    <h3 class="title line">Contacts</h3>
    <?php
$dpt = $this->uri->segment(1);
?>
    <article class="box page-row">
    <?php if(isset($dcontacts)) : foreach($dcontacts as $row) :  ?>    
    <?php if ($row->seg == $dpt):?>
     
        <figure class="thumb col-md-2">
            <img src="assets/images/news/news-thumb-1.jpg" alt="" >
        </figure>
        <div class="details col-md-8">
        <h0><strong>Department:</strong><?php echo $row->dept?></h0></br>
        <h0><strong>Role:</strong><?php echo $row->role?></h0></br>
        <h0><strong>Name:</strong><?php echo $row->name?></h0></br>
        <h0><strong>Tel:</strong><?php echo $row->tel?></h0></br>
        <h0><strong>Email:</strong><?php echo $row->email;?></h0>
        </div>
    <!--//news-item-->
    </div>
    <?php endif; ?> 
   <?php  endforeach;?>
    <?php else : ?>
    <h6>No records </h6>
    <?php endif; ?> 
    </article>
</section><!--//widget-->