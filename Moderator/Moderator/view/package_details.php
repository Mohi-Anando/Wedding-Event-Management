<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
	body{
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,150,150,1) 0%, rgba(0,212,255,1) 100%);
        }
</style>
</head>
<body>
	<?php include 'log_top.php';?>

	<fieldset>
		<table width="100%" align="center">
			<tr>
				<td ><b>
				Product's Menu<hr><br>
					<ul>
								<a href="package_details.php">Details</a>	
					</ul>
				</td>
				<td >
	    <fieldset>
        <?php include '../controller/package_details.php';?>

<div class="row">
    <div>
        <center><h3>PACKAGES LIST</h3></center>
        
    </div>
    
    <!-- List the users -->
    <table class="tb2" align="center">
        <thead>
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
                  <a href="addEdit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">edit</a>
                    
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
<br><br>
		<?php include 'footer.php';?>
	</body>
	</html>