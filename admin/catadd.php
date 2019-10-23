<?php include '../class/Catagory.php';?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 

    $cat = new Catagory();
if($_SERVER['REQUEST_METHOD']== "POST"){
    $catname = $_POST['catagory'];

    $insertcat = $cat->catInsert($catname);
}


 ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
                <span style="color:green;">
                <?php 

                        if (isset($insertcat)) {
                            echo $insertcat;
                        }
                 ?>
                 </span>
               <div class="block copyblock"> 
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." class="medium" name="catagory"/>
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