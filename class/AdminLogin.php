<?php 

	$filepath = realpath(dirname(__FILE__));
	 include_once ($filepath.'/../lib/session.php');
	 Session::checkLogin();
     include_once        ($filepath.'/../lib/Database.php');
	 include_once        ($filepath.'/../helper/Formate.php');


 ?>



<?php 

	class AdminLogin{
		private $db;
		private $fm;
		function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function adminLogin($Username, $password){
			$Username = $this->fm->validation($Username);
			$password = $this->fm->validation($password);


			$Username = mysqli_real_escape_string($this->db->link , $Username);
			$password = mysqli_real_escape_string($this->db->link , $password);


			if (empty($Username)|| empty($password)) {
				$loginmsg = "!!!Field must not be empty!!!";
				return $loginmsg;
			}else{
				$query = "SELECT * FROM db_admin WHERE adminUser ='$Username' AND adminPass ='$password'";
				$result = $this->db->select($query);

				if($result != false){
					$value = $result->fetch_assoc();
					Session::set("adminlogin", true);
					Session::set("adminId", $value['adminId']);
					Session::set("adminUser",  $value['adminUser']);
					Session::set("adminName",  $value['adminName']);
					header("Location:dasboard.php");
		
				}else{
					$loginmsg = "Username Or Password Wrong";
					return $loginmsg;
				}
			}
		}
	}


 ?>