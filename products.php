<?php include 'inc/header.php';?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Laptop</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
    	
	      <div class="section group">
	      <?php 

	      		$getpd = $pd->getProductFormNotebook();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
			</div>
			
			
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Monitor</h3>
    		</div>
    		<div class="clear"></div>
    	    </div>
			<div class="section group">
				<?php 

	      		$getpd = $pd->getProductFormMonitor();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>

			<div class="content_bottom">
    		<div class="heading">
    		<h3>Graphics Card</h3>
    		</div>
    		<div class="clear"></div>
    	    </div>
    	    <div class="section group">
				<?php 

	      		$getpd = $pd->getProductFormGraphics();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>

				<div class="content_bottom">
    		<div class="heading">
    		<h3>Software</h3>
    		</div>
    		<div class="clear"></div>
    	    </div>
    	    <div class="section group">
				<?php 

	      		$getpd = $pd->getProductFormSoftware();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>

				<div class="content_bottom">
    		<div class="heading">
    		<h3>Desktop Computer</h3>
    		</div>
    		<div class="clear"></div>
    	    </div>
    	    <div class="section group">
				<?php 

	      		$getpd = $pd->getProductFormDesktop();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>

				<div class="content_bottom">
    		<div class="heading">
    		<h3>Office Equipment</h3>
    		</div>
    		<div class="clear"></div>
    	    </div>
    	    <div class="section group">
				<?php 

	      		$getpd = $pd->getProductFormOffice();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>

				<div class="content_bottom">
    		<div class="heading">
    		<h3>Photography</h3>
    		</div>
    		<div class="clear"></div>
    	    </div>
    	    <div class="section group">
				<?php 

	      		$getpd = $pd->getProductFormPhotography();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>

				<div class="content_bottom">
    		<div class="heading">
    		<h3>Soundbox</h3>
    		</div>
    		<div class="clear"></div>
    	    </div>
    	    <div class="section group">
				<?php 

	      		$getpd = $pd->getProductFormSoundbox();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>

				<div class="content_bottom">
    		<div class="heading">
    		<h3>Playstation</h3>
    		</div>
    		<div class="clear"></div>
    	    </div>
    	    <div class="section group">
				<?php 

	      		$getpd = $pd->getProductFormPlaystation();
	      		if($getpd){
	      			while ($result = $getpd->fetch_assoc()) {
	      			     				
	       ?>
				<div class="grid_1_of_4 images_1_of_4 ">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" height="100"/></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><span class="price"><?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>

    </div>
 </div>
<?php include 'inc/footer.php'?>