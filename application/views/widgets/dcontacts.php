<section class="widget">
    <h3 class="title"><strong>Contacts</strong></h3>
<?php
$dpt = $this->uri->segment(1);
?>
    <?php if(isset($dcontacts)) : foreach($dcontacts as $row) :  ?>    
    <?php if ($row->seg == $dpt):?>
    <div class="box box-border page-row">
        <h0><strong>Name:</strong><?php echo $row->name?></h0></br>
        <h0><strong>Department:</strong><?php echo $row->dept?></h0></br>
        <h0><strong>Role:</strong><?php echo $row->role?></h0></br>
        <h0><strong>Tel:</strong><?php echo $row->tel?></h0></br>
        <h0><strong>Email:</strong><?php echo $row->email;?></h0>
     
    </div>
    <?php endif; ?> 
   <?php  endforeach;?>
    <?php else : ?>
    <h6>No records </h6>
    <?php endif; ?>
</section> 