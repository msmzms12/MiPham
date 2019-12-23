<?php 
include_once('models/Employee.php');
	class EmployeeController{
		var $model;
		public function __construct(){
			$this->model = new Employee();
		}
		public function list(){
			
			$hienthi = $this->model->All();
			include_once('views/Employee/listEmployee.php');
		}
		public function detail(){
			$code = $_GET['code'];

			$result = $this->model->find($code);
			include_once('views/Employee/detailEmployee.php');
		}
		public function add(){
			include_once('views/Employee/addEmployee.php');
		}
		public function store(){
			$data_add = $_POST;
			$data_add['password']= hash("md5", $data_add['password']);
			$status = $this->model->insert($data_add);
			if($status){
				header('Location: ?mod=employee&act=list');
			}else{
				header('Location: ?mod=employee&act=add');
			}
		}
		public function edit(){
			$code = $_GET['code'];
			$result = $this->model->find($code);
			include_once('views/Employee/editEmployee.php');
		}
		public function update(){
			$data_add = $_POST;

			$status = $this->model->update($data_add);
			  
			if($status){
				header('Location: ?mod=employee&act=list');
			}else{
				header('Location: ?mod=employee&act=edit');
			}
		}
		public function delete(){
			$code = $_GET['code'];
			$result = $this->model->delete($code);
			header('Location: index.php?mod=employee&act=list');
		}
		public function error(){
			header('Location: http://phamvantai.net/hw.php16.zent/Froject/models/erro.php');
		}
	}

 ?>