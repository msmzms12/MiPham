<?php 
	class Connection{
		var $conns;
		function __construct(){
		$servername = "localhost";//255.123.45.21
	  	$username = "root";   // ten dang nhap
	  	$password = "";    // mat khau rong
	  	$dbname = "mipham";   // db muon ket noi

	  	$this->conns = new mysqli($servername,$username,$password,$dbname);


	  $this->conns->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	  // Check connection
	  if ($this->conns->connect_error) {
	  	die("Connection failed: " . $this->conns->connect_error);
	  		}
		}
	}
 ?>