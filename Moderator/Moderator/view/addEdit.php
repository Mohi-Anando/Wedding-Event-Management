<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        table{
            background-color: #f0e5e4;
        }
        body{
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,150,150,1) 0%, rgba(0,212,255,1) 100%);
        }
        a:hover{
			background-color: #b2d4bb;
			color:black;
		}
    </style>
</head>
<body>
	<?php include 'log_top.php';?>
	<fieldset>
		<table width="100%" align="center">
			<tr>
				
				<td width="75%">
					<fieldset>
					
		<?php include '../controller/addEdit.php';?>

<div class="row">
    <div class="col-md-12">
        <h2><?php echo $actionLabel; ?> &nbsp;PACKAGES</h2>
    </div>
    <div class="col-md-6">
         <form method="post" action="../controller/userAction.php">
            <table>
                <tr>
                    <td>
                    <label>Packages Name</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="pname" placeholder="Enter Package name" value="<?php echo !empty($userData['pname'])?$userData['pname']:''; ?>" required="">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Photograpers</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="photoN" placeholder="Enter Photographers number" value="<?php echo !empty($userData['photoN'])?$userData['photoN']:''; ?>" required="">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label> Cinematographer </label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="cineN" placeholder="Enter  Cinematographer" value="<?php echo !empty($userData['cineN'])?$userData['cineN']:''; ?>" required="">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Price </label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="price" placeholder="Enter Price" value="<?php echo !empty($userData['price'])?$userData['price']:''; ?>" required="">
                    </td>
                </tr>
                <tr>
                    <td>
                    <a href="package_details.php" class="btn btn-secondary">Back</a>
                    </td>
                    <td>
                    <input type="hidden" name="id" value="<?php echo !empty($memberData['id'])?$memberData['id']:''; ?>">
                    <input type="submit" name="userSubmit" class="btn btn-success" value="Submit">
                    </td>
                </tr>
            </table>           
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