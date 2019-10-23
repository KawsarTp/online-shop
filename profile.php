<?php include 'inc/header.php';?>
<?php 

$log = Session::get("userLogin");
if ($log == false) {
    header("Location:login.php");
}

 ?>
 <style>
 	.tblone{width:550px;margin:0px auto;border:2px solid #ddd;}
 	.tblone tr td{text-align: justify;}
 </style>
 <div class="main">
    <div class="content">
    <div class="section group">
    <?php 

    	$id = Session::get('userId');
    	$getdata  = $user->getUserData($id);
    	if ($getdata) {
    		while ($resultdata = $getdata->fetch_assoc()) {
    		    
     ?>
    	<table class="tblone">
    		<tr>
    			<td colspan="3"><h2>Your Profile Details</h2></td>
    		</tr>
    		<tr>
    			<td>Name</td>
    			<td>:</td>
    			<td><?php echo $resultdata['Name'];?></td>
    		</tr>
    		<tr>
    			<td>Address</td>
    			<td>:</td>
    			<td><?php echo $resultdata['userAdd'];?></td>
    		</tr>
    		<tr>
    			<td>City Name</td>
    			<td>:</td>
    			<td><?php echo $resultdata['userCity'];?></td>
    		</tr>
    		<tr>
    			<td>Country</td>
    			<td>:</td>
    			<td><?php echo $resultdata['userCon'];?></td>
    		</tr>
    		<tr>
    			<td>Zip</td>
    			<td>:</td>
    			<td><?php echo $resultdata['userZip'];?></td>
    		</tr>
    		<tr>
    			<td>Phone </td>
    			<td>:</td>
    			<td><?php echo $resultdata['userPhone'];?></td>
    		</tr>
    		<tr>
    			<td>E-mail</td>
    			<td>:</td>
    			<td><?php echo $resultdata['userEmail'];?></td>
    		</tr>
    		<tr>
    			<td></td>
    			<td></td>
    			<td><a href="updateprofile.php">Update Your Profile</a></td>
    		</tr>
    	</table>
    	<?php } } ?>
    </div>
 	</div>
 	</div>
<?php include 'inc/footer.php'?>