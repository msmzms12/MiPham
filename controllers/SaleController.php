<?php 
include_once('models/Sale.php');
include_once('models/Customer.php');
include_once('models/Product.php');
include_once('models/Employee.php');
include_once('models/bill.php');
include_once('models/bill_detail.php');
class SaleController
{
	var $model;

	public function __construct(){
		$this->model = new Sale();
			// $this->customerModel = new Customer();
	}
	public function creat_bill(){

		$hienthi = $this->model->All();
		include_once('views/Sale/creat_bill.php');
	}
	public function purchase(){
		if(isset($_GET['code'])){
			$code = $_GET['code'];
			$customer = $this->model->find($code);
			$_SESSION['customer'] = $customer;


			header('Location: ?mod=sale&act=sale');
		}else{
			header('Location: ?mod=sale&act=creat_bill');
		}
	}

	public function sale(){
		if(isset($_SESSION['customer'])){
			$customer = $_SESSION['customer'];

			$ProductModel = new Product();
			$hienthi = $ProductModel->All();



			$cart = array();
			if(isset($_SESSION['cart'])){
				$cart =$_SESSION['cart'];

			}

			include_once('views/Sale/sale.php');
		}else{
			header('Location: ?mod=sale&act=creat_bill');
		}

	}


	public function add2cart(){

		$maSP = $_GET['code'];


		if(isset($_SESSION['cart'][$maSP])){
			$_SESSION['cart'][$maSP]['total'] = $_SESSION['cart'][$maSP]['total'] +1;

		}else{
			$ProductModel1 = new Product();
			$product = $ProductModel1->find($maSP);
			$product['total'] = 1;
			$_SESSION['cart'][$maSP] = $product;


			setcookie('addtocart','!',time()+3);

		}

		header('Location: ?mod=sale&act=sale');
	}

	public function remove_product(){
		$maSP = $_GET['code'];
		if($_SESSION['cart'][$maSP]['total'] == 1){
			unset($_SESSION['cart'][$maSP]);
		}else{
			$_SESSION['cart'][$maSP]['total'] = $_SESSION['cart'][$maSP]['total'] -1;
		}
		header('Location: ?mod=sale&act=sale');
	}
	public function unset(){
		unset($_SESSION['customer']);
		unset($_SESSION['cart']);

		header('Location: ?mod=sale&act=creat_bill');

	}


	public function payment(){
		$ProductModel1 = new Product();

		$tiennhan = $_POST;
		$maNV = $_SESSION['nv'];
		$customer = $_SESSION['customer'];
		$cart = $_SESSION['cart'];

		$hoadon = array();
		$hoadon['maHĐ'] = $customer['code'].'_'.$maNV['code'].'_'.time();
		$hoadon['maNV'] =$maNV['code'];
		$hoadon['maKH']	=$customer['code'];
		$hoadon['ngayban']  = date('Y-m-d H:i:s');
		$hoadon['action'] =0;
		$model_bill = new bill();
		$model_bill->insert($hoadon);

		$tongtien = 0;

		foreach ($cart as $value) {

			$prod['maHĐ'] = $hoadon['maHĐ'];
			$prod['maSP'] = $value['code'];
			$prod['soluong'] = $value['total'];
			$prod['giaban'] = $value['price'];
			$prod['thanhtien'] = $value['total']*$value['price'];

			$tongtien += $prod['thanhtien'];
			
			$bill_detail = new bill_detail();
			$bill_detail->insert($prod);

			$ProductModel1 = new Product();

			$ProductModel1->trusoluong($prod['maSP'],$prod['soluong']);

		}

		$ubill ['maHĐ'] = $hoadon['maHĐ'];

		$ubill ['tongtien'] = $tongtien;
		$ubill ['tiennhan'] = $tiennhan['tiennhan'];
		$ubill ['tienthua'] = (int)$tiennhan['tiennhan'] - (int)$tongtien;

		$model_bill->update($ubill);

		unset($_SESSION['cart']);
		unset($_SESSION['customer']);

		header('Location: ?mod=sale&act=billDetail&maHĐ='.$hoadon['maHĐ']);


	}


	public function billDetail(){


		$maHĐ = $_GET['maHĐ'];
		$bill_detail = new bill_detail();
		$chitiethoadon = $bill_detail->find($maHĐ);
		$model_bill = new bill();
		$hoadon = $model_bill->find($maHĐ);

		include_once('views/Sale/billDetail.php');

	}



	public function bestNV(){
		$model_bill = new bill();
		$thongkeNv = $model_bill->bestNV();
		$bill_detail = new bill_detail();;
		$thongkeSp = $bill_detail->bestSP();

		include_once('views/Thongke/baocaothongke.php');
	}

	









	public function error(){
		header('Location: http://phamvantai.net/hw.php16.zent/Froject/models/erro.php');
	}



}




?>