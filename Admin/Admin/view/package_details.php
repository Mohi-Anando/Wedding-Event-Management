<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
		a:hover{

		background: yellow;

		color:black;

}

	</style>
</head>
<body>
	<?php include 'log_top.php';?>

	<?php include 'inside_header.php';?>


	<fieldset>
		<table border="1" width="100%">
			<tr>
				<td width="25%"><b>
				Product's Menu<hr><br>
					<ul style="list-style-type:disc;">
								<li><a href="addEdit.php">Add Packages</a></li>
								<li><a href="package_details.php">Details</a></li>
                                
						<form method="POST" action="../controller/logout.php">
							<li><button type="submit" name="logout_btn">Log out</button></li>
						</form>
						
					</ul>
				</td>
				<td width="75%">
					<fieldset>
					<?php include '../controller/package_details.php';?>

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
                <th>Moderator Action&nbsp;</th><hr>
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
                  <a href="../controller/userAction.php?action_type=delete&id=<?php echo $row['id']; ?>" 
                  class="btn btn-danger" onclick="return confirm('Are you sure to delete?');"><b><font color="red">Destroy!</font></a>
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