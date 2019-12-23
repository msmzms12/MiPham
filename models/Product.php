<?php 
	include_once('models/model.php');
	
	class Product extends Model{
		var $table = "SAN_PHAM";
		var $primary_key = "code";	


	public	function trusoluong($maSP,$soluong){


		$soluongcon = $this->laysoluong($maSP) - $soluong;
		$query = "UPDATE ".$this->table." SET total = ".$soluongcon."
					
					WHERE ".$this->primary_key." = '".$maSP."' ";
					
		$result = $this->conn->query($query);
		return $result;			
	}


	public function laysoluong($maSP){



		$query  = "SELECT total FROM ".$this->table." WHERE ".$this->primary_key." = '".$maSP."'";
		$result = $this->conn->query($query)->fetch_assoc()['total'];

		return $result;
	}





	}


 ?>