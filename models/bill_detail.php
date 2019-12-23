<?php 
	include_once('models/model.php');
	class bill_detail extends Model
	{
		var $table = "hoadon_type";


		


		function find($code){


				$data = array();
			  $query = "SELECT hoadon_type.* , san_pham.name as name FROM hoadon_type JOIN san_pham ON hoadon_type.maSP = san_pham.code WHERE  maHĐ = '".$code."'";
				// Thuc thi cau lenh truy van co so du lieu
			  $result = $this->conn->query($query);

			  while ($row = $result->fetch_assoc()) {
			  		$data[]= $row;
			  }
			


			return $data;
			}
		


			function bestSP(){
				$data = array();
			  $query = "SELECT san_pham.*,maSP,SUM(soluong)as sum FROM hoadon_type JOIN san_pham ON hoadon_type.maSP = san_pham.code GROUP BY maSP";
				// Thuc thi cau lenh truy van co so du lieu
			  $result = $this->conn->query($query);

			  while ($row = $result->fetch_assoc()) {
			  		$data[]= $row;
			  	

			  }
			  return $data;
		}
			}


	






 ?>