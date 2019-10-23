<?php 
	$filepath = realpath(dirname(__FILE__));
     include_once        ($filepath.'/../lib/Database.php');
	 include_once        ($filepath.'/../helper/Formate.php');
  ?>

<?php

 
 	class Product{
 		
 		private $db;
		private $fm;
		function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function productInsert($data, $file){
			$productname = mysqli_real_escape_string($this->db->link , $data['productname']);
			$catId = mysqli_real_escape_string($this->db->link , $data['catId']);
			$brandId = mysqli_real_escape_string($this->db->link , $data['brandId']);
			$body = mysqli_real_escape_string($this->db->link , $data['body']);
			$price = mysqli_real_escape_string($this->db->link , $data['price']);
			$type = mysqli_real_escape_string($this->db->link , $data['type']);


			$permited  = array('jpg', 'jpeg', 'png', 'gif');
    		$file_name = $file['image']['name'];
    		$file_size = $file['image']['size'];
   			 $file_temp = $file['image']['tmp_name'];

    		$div = explode('.', $file_name);
   		 		$file_ext = strtolower(end($div));
   		 		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    			$uploaded_image = "uploads/".$unique_image;
    		 if ($productname == "" || $catId == "" || $brandId == "" || $body == "" || $price == "" || $type == "" || $uploaded_image == ""){
    		 	$loginmsg = "!!!Product Field Must Not be Empty!!!";
				return $loginmsg;
    		 } else{
    			move_uploaded_file($file_temp, $uploaded_image);
    			$query = "INSERT INTO tbl_product (productName,catId,brandId,body,price,image,type) VALUES ('$productname','$catId','$brandId','$body','$price','$uploaded_image','$type')";
    			$result = $this->db->insert($query);
    			if ($result) {
				$loginmsg = "!!!Product Field Successfully inserted!!!";
				return $loginmsg;
			}else{
				$loginmsg = "!!!Product Not inserted!!!";
				return $loginmsg;
			}
    		}

			
		}


		public function getAllProduct(){
			$query = "SELECT tbl_product.*, tbl_catagory.catName,tbl_brand.brandName 
			FROM tbl_product
			INNER JOIN tbl_catagory
			ON tbl_product.catId = tbl_catagory.catId
			INNER JOIN tbl_brand
			ON tbl_product.brandId = tbl_brand.brandId
			ORDER BY tbl_product.productId ASC";
			$result = $this->db->select($query);
			return $result;
		}

		public function getFeatureProduct(){
			$query = "SELECT * FROM tbl_product WHERE type='0' ORDER BY productId ASC LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}
		public function getNewProduct(){
			$query = "SELECT * FROM tbl_product WHERE type='1' ORDER BY productId ASC LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		public function getSingleProduct($id){
			$query = "SELECT tbl_product.*, tbl_catagory.catName,tbl_brand.brandName 
			FROM tbl_product
			INNER JOIN tbl_catagory
			ON tbl_product.catId = tbl_catagory.catId
			INNER JOIN tbl_brand
			ON tbl_product.brandId = tbl_brand.brandId AND tbl_product.productId = '$id'";
			
			$result = $this->db->select($query);
			return $result;
		}

		public function getproById($cid){
			$query = "SELECT * FROM tbl_product WHERE catId = $cid";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProBycat(){
			$catId = 9;
			$query = "SELECT tbl_product.*, tbl_catagory.catName,tbl_catagory.catName 
			FROM tbl_product
			INNER JOIN tbl_catagory
			ON tbl_product.catId = tbl_catagory.catId
			WHERE catId = $catId";
			
			$result = $this->db->select($query);
			return $result;
		}

		public function getProByApple(){
			$query = "SELECT * FROM tbl_product WHERE brandId='19' ORDER BY productId  LIMIT 1";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProBySamsung(){
			$query = "SELECT * FROM tbl_product WHERE brandId='15' ORDER BY productId  LIMIT 1";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProByNikon(){
			$query = "SELECT * FROM tbl_product WHERE brandId='20' ORDER BY productId  LIMIT 1";
			$result = $this->db->select($query);
			return $result;
		}
		public function getProByplaystation(){
			$query = "SELECT * FROM tbl_product WHERE brandId='17' ORDER BY productId  LIMIT 1";
			$result = $this->db->select($query);
			return $result;
		}


		public function getProductFormNotebook(){
			$query = "SELECT * FROM tbl_product WHERE catId='9' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProductFormMonitor(){
			$query = "SELECT * FROM tbl_product WHERE catId='10' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		
		public function getProductFormGraphics(){
			$query = "SELECT * FROM tbl_product WHERE catId='15' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProductFormSoftware(){
			$query = "SELECT * FROM tbl_product WHERE catId='11' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProductFormDesktop(){
			$query = "SELECT * FROM tbl_product WHERE catId='12' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProductFormOffice(){
			$query = "SELECT * FROM tbl_product WHERE catId='13' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProductFormPhotography(){
			$query = "SELECT * FROM tbl_product WHERE catId='14' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		public function getProductFormSoundbox(){
			$query = "SELECT * FROM tbl_product WHERE catId='16' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}
		public function getProductFormPlaystation(){
			$query = "SELECT * FROM tbl_product WHERE catId='17' ORDER BY productId  LIMIT 4";
			$result = $this->db->select($query);
			return $result;
		}

		public function productSearch($search){
			$query = "SELECT * FROM tbl_product WHERE productName LIKE $search" ;
			$result = $this->db->select($query);
			return $result;
		}

 	}

 ?>