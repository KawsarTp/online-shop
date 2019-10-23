<?php include 'inc/header.php';?>
<?php 

$log = Session::get("userLogin");
if ($log == false) {
    header("Location:login.php");
}

 ?>
 <?php 
$id = Session::get('userId');
if ($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['submit'])) {
    $proup  = $user->userproUpdate($_POST,$id);
}

 ?>
 <style>
 	.tblone{width:550px;margin:0px auto;border:2px solid #ddd;}
 	.tblone tr td{text-align: justify;}
     .tblone input[type="text"]{width:400px;padding: 5px;font-size: 15px;}
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
     <form action="" method="POST">
    	<table class="tblone">
    		<tr>
    			<td colspan="2"><h2>Update Profile Details</h2></td>
    		</tr>
    		<tr>
    			<td width="20%">Name</td>
    			<td><input type="text" name="name" value="<?php echo $resultdata['Name'];?>"></td>
    		</tr>
    		<tr>
    			<td>Address</td>
    			<td><input type="text" name="address" value="<?php echo $resultdata['userAdd'];?>"></td>
    		</tr>
    		<tr>
    			<td>City Name</td>
    			<td><input type="text" name="city" value="<?php echo $resultdata['userCity'];?>"></td>
    		</tr>
    		<tr>
    			<td>Country</td>
    			<td><input type="text" name="country" value="<?php echo $resultdata['userCon'];?>"></td>
    		</tr>
    		<tr>
    			<td>Zip</td>
    			<td><input type="text" name="zip" value="<?php echo $resultdata['userZip'];?>"></td>
    		</tr>
    		<tr>
    			<td>Phone </td>
    			<td><input type="text" name="phone" value="<?php echo $resultdata['userPhone'];?>"></td>
    		</tr>
    		<tr>
    			<td>E-mail</td>
    			<td><input type="text" name="email" value="<?php echo $resultdata['userEmail'];?>"></td>
    		</tr>
    		<tr>
    			<td></td>
    			<td><input type="submit" name="submit" value="Update"></a></td>
    		</tr>
    	</table>
        </form>
        <?php } } ?>
    </div>
 	</div>
 	</div>
<?php include 'inc/footer.php'?>