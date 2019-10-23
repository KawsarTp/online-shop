<?php include 'inc/header.php';?>
<?php 

if(!isset($_GET['delete']) && $_GET['delete'] == NULL){
        echo "<script>window.location = '404.php';</script>";
    }else{
        $id = $_GET['delete'];
        $delete = $ct->deleteCart($id);
        header("Location:cart.php");
    }

 ?>
 <?php include 'inc/footer.php'?>