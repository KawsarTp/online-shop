<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include_once '../helper/Formate.php'; ?>


<?php 

		$product = new Product();
		$formate = new Format();

	


 ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Post List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial</th>
					<th>ProductName</th>
					<th>CatID</th>
					<th>BrandID</th>
					<th>Body</th>
					<th>Price</th>
					<th>Image</th>
					<th>Type</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 

				$get = $product->getAllProduct();
				if ($get) {
					$i=0;
					while ($value = $get->fetch_assoc()) {
						$i++;

			 ?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $value['productName'];?></td>
					<td><?php echo $value['catName'] ;?></td>
					<td><?php echo $value['brandName'] ;?></td>
					<td><?php echo $formate->textShorten($value['body']) ;?></td>
					<td><?php echo $value['price'] ;?></td>
					<td><img src="<?php echo $value['image'] ;?>" width="40px" height="40px"></td>
					<td><?php echo $value['type'] ;?></td>
					
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
				<?php } } ?>
			</tbody>
		</table>

       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
