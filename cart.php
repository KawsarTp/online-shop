<?php include 'inc/header.php';?>
<?php 


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    	$quantity = $_POST['quantity'];
    	$cartid = $_POST['cartid'];
    	$updatecart =  $ct->updateCart($quantity, $cartid);
     }

 ?>
 <?php 
 		if (!isset($_GET['id'])) {
 			echo "<meta http-equiv='refresh' content='0;URL=?id=kawsar'/>";
 		}

  ?>

 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Cart</h2>
			    	<?php 
			    		
			    		if (isset($updatecart)) {
			    			echo $updatecart;
			    		}
			    		if (isset($delete)) {
			    			echo $delete;
			    		}

			    	 ?>
						<table class="tblone">
							<tr>
							<th width="05%">Serial</th>
								<th width="30%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="25%">Quantity</th>
								<th width="20%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
							<?php 

								$getproduct = $ct->getCartProduct();
								$i = 0;
								$sum = 0;
								if ($getproduct) {
									while ($result = $getproduct->fetch_assoc()) {
										$i++;
									
							 ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName'] ?></td>
								<td><img src="admin/<?php echo $result['image']; ?>" alt=""/></td>
								<td>Tk. <?php echo $result['price']; ?></td>
								<td>
									<form action="" method="post">
										<input type="hidden" name="cartid" value="<?php echo $result['cartId'] ?>"/>
										<input type="number" name="quantity" value="<?php echo $result['quantity'] ?>"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>Tk. 
								<?php 
										$total = $result['quantity']*$result['price'];
										echo $total;
								 ?></td>
								<td><a onclick ="return confirm('Are you Sure to Delete');" href="delete.php?delete=<?php echo $result['cartId']; ?>">Delete</a></td>
							</tr>
							<?php 

							$sum = $total +$sum;

							 ?>
							
							<?php }}  ?>
							
						</table>
						<?php 
							$getdata = $ct->checkCartTable();
							if ($getdata) {

						 ?>
						<table style="float:right;text-align:left;" width="40%">


							<tr>
								<th>Sub Total : </th>
								<td>TK. <?php echo $sum; ?></td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>2%</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td>TK. <?php 
										$vat = (2*$sum)/100;
										$gtotal = $sum + $vat ;
										echo $gtotal; 
										Session::set("sum",$gtotal);
								 ?> </td>
							</tr>
					   </table>
					   <?php }else{
					   	header("Location:index.php");
					   	} ?>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

<?php include 'inc/footer.php'?>