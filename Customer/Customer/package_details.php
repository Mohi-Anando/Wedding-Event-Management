<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'logtop.php';?>

	<?php include 'logintop.php';?>


	<fieldset>
		<table border="1" width="100%">
			<tr>
				<td width="25%"><b>
				Product's Menu<hr><br>
					<ul style="list-style-type:disc;">
								<li><a href="package_details.php">Details</a></li>
                                
    
						
					</ul>
				</td>
				<td width="75%">
					<fieldset>
					<?php 
 
 
// Retrieve session data 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
 
// Include and initialize JSON class 
require_once 'Json.class.php'; 
$db = new Json(); 
 
// Fetch the member's data 
$members = $db->getRows(); 
 
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

<div class="row">
    <div class="col-md-12 head">
        <h3>PACKAGES LIST</h3>
        
    </div>
    
    <!-- List the users -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#Serial No. &nbsp;</th>
                <th> Packages No.&nbsp;</th>
                <th>Photographer No.&nbsp;</th>
                <th> Cinematographer No.&nbsp;</th>
                <th>Price &nbsp;</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($members)){ $count = 0; foreach($members as $row){ $count++; ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $row['pname']; ?></td>
                <td><?php echo $row['photoN']; ?></td>
                <td><?php echo $row['cineN']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td>
                  <Center>
                  
                    
                </td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="6">No Packages(s) found...</td></tr>
            <?php } ?>
        </tbody>
    </table>
</div>
						</fieldset>
					</td>
				</tr>
			</table>
		</fieldset>

		<?php include 'footer.php';?>
	</body>
	</html>