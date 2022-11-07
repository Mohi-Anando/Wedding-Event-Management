<?php 
    // Retrieve session data 
    $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 

    // Get member data 
    $memberData = $userData = array(); 
    if(!empty($_GET['id'])){ 
        // Include and initialize JSON class 
        include 'Json.class.php'; 
            $db = new Json(); 

        // Fetch the member data 
        $memberData = $db->getSingle($_GET['id']); 
    } 
        $userData = !empty($sessData['userData'])?$sessData['userData']:$memberData; 
        unset($_SESSION['sessData']['userData']); 

        $actionLabel = !empty($_GET['id'])?'Edit':'ADD'; 

        // Get status message from session 
    if(!empty($sessData['status']['msg'])){ 
        $statusMsg = $sessData['status']['msg']; 
        $statusMsgType = $sessData['status']['type']; 
        unset($_SESSION['sessData']['status']); 
    } 
    ?>

<!-- Display status message -->
<?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
<div class="col-xs-12">
    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
</div>
<?php }elseif(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
<div class="col-xs-12">
    <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>
