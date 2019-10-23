<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
			<?php 

			$getapple = $pd->getProByApple();
			if ($getapple) {
				while ($result = $getapple->fetch_assoc()) {
		
			 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Iphone</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php }} ?>
			   <?php 

			   	$getnikon = $pd->getProByNikon();
			if ($getnikon) {
				while ($result = $getnikon->fetch_assoc()) {

			    ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Nikon</h2>
						  <p><?php echo $result['productName']; ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
					</div>
				</div>
				<?php } } ?>
			</div>
			
			<div class="section group">
			<?php 

					$getsamsung = $pd->getProBySamsung();
			if ($getsamsung) {
				while ($result = $getsamsung->fetch_assoc()) {
			 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Samsung</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php } } ?>		
			   <?php 

			   	$getplay = $pd->getProByplaystation();
			if ($getplay) {
				while ($result = $getplay->fetch_assoc()) {

			    ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Playstation</h2>
						  <p><?php echo $result['productName']; ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
					</div>
				</div>
				<?php } } ?>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/1.jpg" alt=""/></li>
						<li><img src="images/2.jpg" alt=""/></li>
						<li><img src="images/3.jpg" alt=""/></li>
						<li><img src="images/4.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>