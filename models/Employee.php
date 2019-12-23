<?php 
	include_once('models/model.php');
	
	class Employee extends Model{
		var $table = "NHAN_VIEN";
		var $primary_key = "code";	

		function check($data){
			$query = "SELECT * FROM NHAN_VIEN WHERE email='".$data['email']."' AND password='".$data['pwd']."' ";

				// Thuc thi cau lenh truy van co so du lieu
			  $result = $this->conn->query($query)->fetch_assoc();

			return $result;
		}
	}

 ?>