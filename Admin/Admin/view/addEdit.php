<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'log_top.php';?>
	<?php include 'inside_header.php';?>


	<fieldset>
		<table border="1" width="100%">
			<tr>
				
				<td width="75%">
					<fieldset>
					<?php include '../controller/addEdit.php';?>




<div class="row">
    <div class="col-md-12"><b>
        <h2><?php echo $actionLabel; ?> &nbsp;PACKAGES</h2>
    </div>
    <div class="col-md-6">
         <form method="post" action="../controller/userAction.php">
            <div class="form-group">
                <label>Package Name: </label>
                <input type="text" class="form-control" name="pname" placeholder="Enter Package name" value="<?php echo !empty($userData['pname'])?$userData['pname']:''; ?>" required="">
            </div>
            <div class="form-group">
                <label>Photograpers:</label>
                <input type="text" class="form-control" name="photoN" placeholder="Enter Photographers number" value="<?php echo !empty($userData['photoN'])?$userData['photoN']:''; ?>" required="">
            </div>
            <div class="form-group">
                <label> Cinematographer: </label>
                <input type="text" class="form-control" name="cineN" placeholder="Enter  Cinematographer" value="<?php echo !empty($userData['cineN'])?$userData['cineN']:''; ?>" required="">
            </div>
            <div class="form-group">
                <label>Price: </label>
                <input type="text" class="form-control" name="price" placeholder="Enter Price" value="<?php echo !empty($userData['price'])?$userData['price']:''; ?>" required="">
            </div><br>
            
            <a href="package_details.php" class="btn btn-secondary">Back</a>&nbsp;&nbsp;
            <input type="hidden" name="id" value="<?php echo !empty($memberData['id'])?$memberData['id']:''; ?>">
            <input type="submit" name="userSubmit" class="btn btn-success" value="Submit">
        </form>
    </div>
</div>



						</fieldset>
					</td>
				</tr>
			</table>
		</fieldset>

		<?php include 'footer.php';?>
	</body>
	</html>