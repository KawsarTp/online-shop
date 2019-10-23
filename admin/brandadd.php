<?php include '../class/Brand.php';?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 

    $brand = new Brand();
if($_SERVER['REQUEST_METHOD']== "POST"){
    $brandname = $_POST['brand'];

    $insertbrand = $brand->brandInsert($brandname);
}


 ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
                <span style="color:green;">
                <?php 

                        if (isset($insertbrand)) {
                            echo $insertbrand;
                        }
                 ?>
                 </span>
               <div class="block copyblock"> 
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="brand" placeholder="Enter Brand Name..." class="medium" name="catagory"/>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>