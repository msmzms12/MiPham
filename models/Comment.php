<?php 
include_once('models/model.php');

class Comment extends Model{
	var $table = "comment_product";
	var $primary_key = "code";


	public function findcomment($code){
		$data =  array();
				// Cau lenh truy van co so du lieu
		$query = "SELECT * FROM ".$this->table." WHERE code = '".$code."'";
		
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}
		return $data;
		
		
	}



}


?>