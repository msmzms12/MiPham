<?php 
	include_once('models/Connection.php');
	class Model{
		var $conn;
		var $table="";
		var $primary_key="";

		function __construct(){
			$connection_public = new Connection();
			$this->conn = $connection_public->conns;
		}
		function All(){
			$data =  array();
				// Cau lenh truy van co so du lieu
		$query = "SELECT * FROM ".$this->table;
		
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}
		return $data;

		}
		function find($code){


				// Cau lenh truy van co so du lieu
			  $query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key." = '".$code."'";
				// Thuc thi cau lenh truy van co so du lieu
			  $result = $this->conn->query($query)->fetch_assoc();
			


			return $result;
			}

		function insert($data_add){
				$column = '';
				$values = '';

					foreach ($data_add as $key => $value) {
						$column .= $key .",";
						$values .="'".$value."',";
					}
					$column = trim($column,',');
					$values = trim($values,',');

							// Cau lenh truy van co so du lieu
					$query = "INSERT INTO ".$this->table." (".$column.") VALUES (".$values.")";
						
							// Thuc thi cau lenh truy van co so du lieu
				$result = $this->conn->query($query);


				if ($result == 1) {
				 	setcookie('msg_t','Thêm mới thành công !',time()+2);
				 }else{
				 	setcookie('msg_f','Thêm mới thất bại !',time()+2);
				 }
				 return $result;
			}

		function update($data_add){
				$values = '';
				foreach ($data_add as $key => $value) {
						
						$values .= $key."='".$value."',";
					}
					$values = trim($values,',');
					// Cau lenh truy van co so du lieu
					$query = "UPDATE ".$this->table." SET
					".$values."
					WHERE ".$this->primary_key." = '".$data_add[$this->primary_key]."'
			
					";

					// Thuc thi cau lenh truy van co so du lieu
					$result = $this->conn->query($query);
					if ($result == 1) {
				 	setcookie('msg_t_update','Thêm mới thành công !',time()+2);
				 	}else{
				 	setcookie('msg_f_update','Thêm mới thất bại !',time()+2);
				 	}
				 return $result;

					return $result;
		}

		function delete($code){


			// Cau lenh truy van co so du lieu
			$query = "
			DELETE FROM ".$this->table." WHERE ".$this->primary_key."  = '".$code."'
			";

			// Thuc thi cau lenh truy van co so du lieu
			$result = $this->conn->query($query);
			

		}
		
	}
	

 ?>