<?php include '../class/Contactus.php';?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 

    $con = new Contactus();
if($_SERVER['REQUEST_METHOD']== "POST"){
    $insertinfo = $con->addContactInfo($_POST);
}


 ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Contact Us </h2>
                <span style="color:green;">
                <?php 

                        if (isset($insertinfo)) {
                            echo $insertinfo;
                        }
                 ?>
                 </span>
               <div class="block copyblock"> 
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="address" placeholder="Enter address..." class="medium"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="phone" placeholder="Enter Phone..." class="medium"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="email" placeholder="Enter email..." class="medium"/>
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