<?php include 'inc/header.php';?>
<?php 

$log = Session::get("userLogin");
if ($log == true) {
	header("Location:order.php");
}

 ?>
<?php 

if ($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['login'])) {
	$login  = $user->userLogin($_POST);
}

 ?>
<style type="text/css">
input[type=password]{
	padding: 7px;
	margin-top: 5px;
	width: 80%;
}

</style>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Existing Customers</h3>
        	<?php 
        		if (isset($login)) {
    			echo $login;
    		}
        	 ?>
        	<p>Sign in with the form below.</p>
        	<form action="" method="POST" >
                	<input type="text" name="email" placeholder="Your email">
                    <input  type="password" name="password" placeholder="Your password">
                     <div class="buttons"><div><button class="grey" name="login">Sign In</button></div></div>
                 </form>
                    </div>

<?php 

if ($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['resister'])) {
	$result = $user->addUser($_POST);
}
?>
    	<div class="register_account">
    			<?php 

    		if (isset($result)) {
    			echo $result;
    		}

    		 ?>
    		<h3>Register New Account </h3>

    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name ="name" placeholder="Name">
							</div>
							
							<div>
							<input type="text" name ="username" placeholder=" User name">
							</div>

							<div>
							   <input type="text" name="city" placeholder="city">
							</div>
							
							<div>
								<input type="text" name="zip" placeholder="zip">
							</div>
							<div>
								<input type="text" name="email" placeholder="email">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" placeholder="address">
						</div>
		    		<div>
						<select id="country" name="country" placeholder="country">
							<option value="null">Select a Country</option>         
							<option value="AF">Afghanistan</option>
							<option value="AL">Albania</option>
							<option value="DZ">Algeria</option>
							<option value="AR">Argentina</option>
							<option value="AM">Armenia</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australia</option>
							<option value="AT">Austria</option>
							<option value="AZ">Azerbaijan</option>
							<option value="BS">Bahamas</option>
							<option value="BH">Bahrain</option>
							<option value="BD">Bangladesh</option>

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" name ="phone" placeholder="phone number" >
		          </div>
				  
				  <div>
					<input type="password" name ="pass" placeholder="password">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey" name="resister">Create Account</button></div></div>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php include 'inc/footer.php'?>