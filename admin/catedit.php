<?php include '../class/Catagory.php';?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
    if(!isset($_GET['catid']) && $_GET['catid'] == NULL){
        echo "<script>window.location = 'catlist.php';</script>";
    }else{
        $id = $_GET['catid'];
    }

    $cat = new Catagory();
if($_SERVER['REQUEST_METHOD']== "POST"){
    $catname = $_POST['catagory'];
    $updatetcat = $cat->catUpdate($catname,$id);
}


 ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Edit Category</h2>
                <span style="color:green;">
                <?php 

                        if (isset($updatecat)) {
                            echo $updatecat;
                        }
                 ?>
                 </span>

                 <?php 
                 $getcat = $cat->getCatById($id);
                 if($getcat){
                 while ($result = $getcat->fetch_assoc()) {
                 
                  ?>
               <div class="block copyblock"> 
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['catName']; ?>" class="medium" name="catagory"/>
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