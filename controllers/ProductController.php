<?php 
include_once('models/Product.php');
	class ProductController{
		var $model;
		public function __construct(){
			$this->model = new Product();
		}
		public function list(){
			$hienthi = $this->model->All();
			include_once('views/Froduct/listProduct.php');
		}
		public function detail(){
			$code = $_GET['code'];

			$result = $this->model->find($code);
			include_once('views/Froduct/detailProduct.php');
		}
		public function add(){
			include_once('views/Froduct/addProduct.php');
		}
		public function store(){
			$data_add = $_POST;
			
			$status = $this->model->insert($data_add);
			if($status){
				header('Location: ?mod=product&act=list');
			}else{
				header('Location: ?mod=product&act=add');
			}
		}
		public function edit(){
			$code = $_GET['code'];
			$result = $this->model->find($code);
			include_once('views/Froduct/editProduct.php');
		}
		public function update(){

			$data_add = $_POST;
			$status = $this->model->update($data_add);
			  
			if($status){
				header('Location: ?mod=product&act=list');
			}else{
				header('Location: ?mod=product&act=edit');
			}
		}
		public function delete(){
			$code = $_GET['code'];
			$result = $this->model->delete($code);
			header('Location: index.php?mod=product&act=list');
		}
		public function error(){
			header('Location: http://phamvantai.net/hw.php16.zent/Froject/models/erro.php');
		}
	}

 ?>