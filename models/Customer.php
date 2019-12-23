<?php 
	include_once('models/model.php');
	
	class Customer extends Model{
		var $table = "KHACH_HANG";
		var $primary_key = "code";	



		function check($data){
			$query = "SELECT * FROM KHACH_HANG WHERE email='".$data['email']."' AND password='".$data['pwd']."' ";

				// Thuc thi cau lenh truy van co so du lieu
			  $result = $this->conn->query($query)->fetch_assoc();

			return $result;
		}
	}


 ?>