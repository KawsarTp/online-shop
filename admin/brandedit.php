<?php include '../class/Brand.php';?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
    if(!isset($_GET['brandid']) && $_GET['brandid'] == NULL){
        echo "<script>window.location = 'brandlist.php';</script>";
    }else{
        $id = $_GET['brandid'];
    }

    $brand = new Brand();
if($_SERVER['REQUEST_METHOD']== "POST"){
    $brandname = $_POST['brand'];
    $updatetbrand = $brand->brandUpdate($brandname,$id);
}


 ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Edit Category</h2>
                <span style="color:green;">
                <?php 

                        if (isset($updatetbrand)) {
                            echo $updatetbrand;
                        }
                 ?>
                 </span>

                 <?php 
                 $getbrand = $brand->getbrandById($id);
                 if($getbrand){
                 while ($result = $getbrand->fetch_assoc()) {
                 
                  ?>
               <div class="block copyblock"> 
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['brandName']; ?>" class="medium" name="brand"/>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php } } ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>