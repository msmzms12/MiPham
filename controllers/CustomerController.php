<?php 
include_once('models/Customer.php');
	class CustomerController{
		var $model;
		public function __construct(){
			$this->model = new Customer();
		}
		public function list(){
			
			$hienthi = $this->model->All();
			include_once('views/Customer/listCustomer.php');
		}
		public function detail(){
			$code = $_GET['code'];

			$result = $this->model->find($code);
			include_once('views/Customer/detailCustomer.php');
		}
		public function add(){
			include_once('views/Customer/addCustomer.php');
		}

		public function creat(){
			include_once('views/Login/CreateAccout.php');
		}
		public function creatAct(){
			$data_add = $_POST;
			
			$status = $this->model->insert($data_add);
			    echo "<pre>";
			        print_r($status);
			    echo"</pre>";
			// if($status){
			// 	header('Location: ?mod=customer&act=list');
			// }else{
			// 	header('Location: ?mod=customer&act=add');
			// }
		}
		public function store(){
			$data_add = $_POST;
			
			$status = $this->model->insert($data_add);
			if($status){
				header('Location: ?mod=customer&act=list');
			}else{
				header('Location: ?mod=customer&act=add');
			}
		}
		public function edit(){
			$code = $_GET['code'];
			$result = $this->model->find($code);
			include_once('views/Customer/editCustomer.php');
		}
		public function update(){
			$data_add = $_POST;

			$status = $this->model->update($data_add);
			  
			if($status){
				header('Location: ?mod=customer&act=list');
			}else{
				header('Location: ?mod=customer&act=edit');
			}
		}
		public function delete(){
			$code = $_GET['code'];
			$result = $this->model->delete($code);
			header('Location: index.php?mod=customer&act=list');
		}
		public function error(){
			header('Location: http://phamvantai.net/hw.php16.zent/Froject/models/erro.php');
		}
	}

 ?>