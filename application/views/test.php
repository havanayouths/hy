<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>
<head>
    <title>Havana youth</title>

    <link href="<?=base_url()?>css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
   
</head>
<body class="background-dark">
        <div class="landing" ">
        <?php  
         require_once 'telerivet/telerivet.php';
         $tr = new Telerivet_API('RVmAAS2XaH3XodDwc1rIzFCyP9R2Bl0a ');
         $project = $tr->initProjectById('PJ610ad49ba7a0c3542ba8d7e9ac4f535a');
         
         $sent_msg = $project->sendMessage(array(
            'content' => "sam your the best", 
            'to_number' => "+264814868534"
        ));
        ?>
         </div>
<!-- common libraries. required for every page-->


<!-- common application js -->

<!-- common templates -->

    <!-- page specific scripts -->
</body>

</html>