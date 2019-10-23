<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Action</th>

						</tr>
					</thead>
					<?php 

						$cart = $ct->getCartData();
						$id =0;
						if ($cart){
							while ($result = $cart->fetch_assoc()) {
								$id++;
					 ?>
					<tbody>
						<tr class="odd gradeX">
							<td><?php echo $id; ?></td>
							<td><?php echo $result['productName']; ?></td>
							<td><?php echo $result['price']; ?></td>
							<td><?php echo $result['quantity']; ?></td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
					</tbody>
					<?php } } ?>
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
