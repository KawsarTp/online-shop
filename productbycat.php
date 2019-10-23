<?php include 'inc/header.php';?>
<?php 

if (isset($_GET['catId']) && $_GET['catId'] == NULL) {
		echo "<script>window.location = '404.php';</script>";
	}else{
		 $cid = $_GET['catId'];
	}

	$result = $pd->getproById($cid);
 ?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Featured Product</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      <?php 

	      		if ($result ) {
	      			while($get = $result->fetch_assoc()){
	       ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $get['productId'] ?>"><img src="admin/<?php echo $get['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $get['productName']; ?></h2>
					 <p><span class="price"><?php echo $get['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $get['productId'] ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
			</div>

	
	
    </div>
 </div>
<?php include 'inc/footer.php'?>