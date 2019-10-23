<?php include 'inc/header.php';?>
<?php 

            if(isset($_GET['orderpro']) && $_GET['orderpro'] == 'order'){
                $id = Session::get('userId');
                $order = $ct->orderProduct($id);
                $deldata = $ct->deleteData();
                header('Location:success.php');
                
            }


 ?>
<?php 

$log = Session::get("userLogin");
if ($log == false) {
    header("Location:login.php");
}

 ?>
 <style>
.tblone{width:500px;margin:0px auto;border:2px solid #ddd;}
    .tblone tr td{text-align: justify;}
    .tbltwo{width:200px;margin:0px auto;border:2px solid #ddd;float: right;margin-top: 5px;height: 130px;}
    .tbltwo tr td{text-align: justify;}
    .division{float: left;}
    .order{display: block;color: white;background: red;padding:10px;width: 100px;text-align:center;margin-bottom:5px;margin-left:450px;}
 </style>
 <div class="main">
    <div class="content">
    <div class="section group">
        <div class="division">
            <table class="tblone">
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            <?php 

                                $getproduct = $ct->getCartProduct();
                                $i = 0;
                                $sum = 0;
                                if ($getproduct) {
                                    while ($result = $getproduct->fetch_assoc()) {
                                        $i++;
                                    
                             ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['productName'] ?></td>
                                <td>Tk.<?php echo $result['price']; ?></td>
                                <td><?php echo $result['quantity']; ?></td> 
                                <td>Tk. 
                                <?php 
                                        $total = $result['quantity']*$result['price'];
                                        echo $total;
                                 ?></td>
                            </tr>
                            <?php 

                            $sum = $total +$sum;

                             ?>
                            
                            <?php }}  ?>
                            
                        </table>
                        <?php 
                            $getdata = $ct->checkCartTable();
                            if ($getdata) {

                         ?>
                        <table class="tbltwo">


                            <tr>
                                <td>Sub Total : </td>
                                <td>TK. <?php echo $sum; ?></td>
                            </tr>
                            <tr>
                                <td>VAT : </td>
                                <td>2%</td>
                            </tr>
                            <tr>
                                <td>Grand Total :</td>
                                <td>TK. <?php 
                                        $vat = (2*$sum)/100;
                                        $gtotal = $sum + $vat ;
                                        echo $gtotal; 
                                        Session::set("sum",$gtotal);
                                 ?> </td>
                            </tr>
                       </table>
                       <?php }else{
                        header("Location:index.php");
                        } ?>
                    </div>

                    <div class="division"> 
            <?php 

        $id = Session::get('userId');
        $getdata  = $user->getUserData($id);
        if ($getdata) {
            while ($resultdata = $getdata->fetch_assoc()) {
                
     ?>
        <table class="tblone">
            <tr>
                <td colspan="3"><h2>Your Profile Details</h2></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php echo $resultdata['Name'];?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><?php echo $resultdata['userAdd'];?></td>
            </tr>
            <tr>
                <td>City Name</td>
                <td>:</td>
                <td><?php echo $resultdata['userCity'];?></td>
            </tr>
            <tr>
                <td>Country</td>
                <td>:</td>
                <td><?php echo $resultdata['userCon'];?></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td>:</td>
                <td><?php echo $resultdata['userZip'];?></td>
            </tr>
            <tr>
                <td>Phone </td>
                <td>:</td>
                <td><?php echo $resultdata['userPhone'];?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>:</td>
                <td><?php echo $resultdata['userEmail'];?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href="updateprofile.php">Update Your Profile</a></td>
            </tr>
        </table>
        <?php } } ?>
        </div>
        </div>
        
    </div>
    <div class="order"><a href="?orderpro=order">Order Now</a></div>
 	</div>
<?php include 'inc/footer.php'?>