<?php 
include_once('models/Product.php');
include_once('models/bill.php');
include_once('models/bill_detail.php');
include_once('models/Comment.php');
include_once('models/ModelContact.php');

	class HomeController{
		var $model;
		public function __construct(){
			$this->model = new Product();
			$this->moldelcomment = new Comment();
			$this->a = new ModelContact();
		}
		// Hiển thị danh sách sản phẩm
		public function list(){
			$hienthi = $this->model->All();
			 
			include_once('views/saleOnline/home.php');
		}

		public function store(){
			$data_add = $_POST;
			    
			    
			$status = $this->moldelcomment->insert($data_add);
				
			$comment = $this->moldelcomment->findcomment($data_add['code']);
			$result = $this->model->find($data_add['code']);
			    
				include_once('views/saleOnline/ProductDetail.php');
		}


		public function contactADD(){
			$data_add = $_POST;
			    
			           
			setcookie('contact','hihi',time()+1);
			header('Location:index.php');
		}

		public function contact(){
			include_once('views/saleOnline/contact.php');
				
		}


		

		// chi tiết sản phẩm
		public function detail(){
			$code = $_GET['code'];
			 	$comment = $this->moldelcomment->findcomment($code);
				$result = $this->model->find($code);
			    
				include_once('views/saleOnline/ProductDetail.php');
		}

		// Giỏ hàng
		public function cart(){	
			error_reporting(0);
			$cartO = array();
			$cartO = $_SESSION['cartO']; //biến toàn cục
			// session_destroy();

					 
			include_once('views/saleOnline/cart.php');
			

		}


		//Thêm sản phẩm vào giỏ hàng
		public function add2cartO(){

			$maSP = $_GET['code'];

			if(isset($_SESSION['cartO'][$maSP])){
				$_SESSION['cartO'][$maSP]['total'] = $_SESSION['cartO'][$maSP]['total'] +1;

			}else{
				$ProductModel1 = new Product();
				$product = $ProductModel1->find($maSP);
				$product['total'] = 1;
				$_SESSION['cartO'][$maSP] = $product;

				setcookie('addtocart','hihi',time()+1);
				  
			}
			header('Location: index.php');
		}


		public function add2cartDetail(){

			$maSP = $_GET['code'];

			if(isset($_SESSION['cartO'][$maSP])){
				$_SESSION['cartO'][$maSP]['total'] = $_SESSION['cartO'][$maSP]['total'] +1;

			}else{
				$ProductModel1 = new Product();
				$product = $ProductModel1->find($maSP);
				$product['total'] = 1;
				$_SESSION['cartO'][$maSP] = $product;

				setcookie('addtocart','hihi',time()+1);
				  
			}
			$comment = $this->moldelcomment->findcomment($maSP);
				$result = $this->model->find($maSP);
			    
				include_once('views/saleOnline/ProductDetail.php');
		}

		// Tăng số lượng sản phẩm trong giỏ hàng
		public function add2cartOcong(){

			$maSP = $_GET['code'];

			if(isset($_SESSION['cartO'][$maSP])){
				$_SESSION['cartO'][$maSP]['total'] = $_SESSION['cartO'][$maSP]['total'] +1;

			}else{
				$ProductModel1 = new Product();
				$product = $ProductModel1->find($maSP);
				$product['total'] = 1;
				$_SESSION['cartO'][$maSP] = $product;
				  
			}


			header('Location: ?mod=saleOnline&act=cart');
		}

		// Xóa sản phẩm trong giỏ hàng
		public function remove_product(){
			$maSP = $_GET['code'];

			if($_SESSION['cartO'][$maSP]['total'] == 1){
				unset($_SESSION['cartO'][$maSP]);
			}else{
				$_SESSION['cartO'][$maSP]['total'] = $_SESSION['cartO'][$maSP]['total'] -1;
			}
			header('Location: ?mod=saleOnline&act=cart');
		}


		
		//Xóa giỏ hàng
		public function unset(){
			
			unset($_SESSION['cartO']);

			header('Location: index.php?');

		}


		//in vào bảng chi tiết hóa đơn
		public function payment(){


			$ProductModel1 = new Product();


			// $maNV = $_SESSION['nv'];
			$cartO = $_SESSION['cartO'];
			
			$hoadon = array();
			$hoadon['maHĐ'] = 'KHOL_NVOL'.'_'.time();
			$hoadon['maNV'] ='NVOL';
			$hoadon['maKH']	='KHOL';
			$hoadon['ngayban']  = date('Y-m-d H:i:s');
			$hoadon['action'] =1;
			$model_bill = new bill();
			$model_bill->insert($hoadon);


			include_once('views/saleOnline/CustomerOrder.php');
		}

		// in vào bảng hóa đơn
		public function hoadon(){
			$model_bill = new bill();
			$qlhoadon =$model_bill->All();
			    
			include_once('views/saleOnline/hoadon.php');
		}


		//Thanh toán
		public function thanhtoan(){
				$maHĐ = $_GET['maHĐ'];
				$cartO = $_SESSION['cartO'];
				$tongtien = 0;
			   
			foreach ($cartO as $value) {

				$prod['maHĐ'] = $maHĐ;   
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

			$ubill ['maHĐ'] = $maHĐ;
			$ubill ['tongtien'] = $tongtien;
			$ubill ['action'] = 0;
			$model_bill = new bill();
			$model_bill->update($ubill);
			unset($_SESSION['cartO']);
			header('Location: ?mod=saleOnline&act=hoadon');


		}

			
		// Gửi email
		public function send_email(){


			$mail = $_POST;
			$email_recive =	$_POST['email'];
			$name = $_POST['name'];


			$contents = "Bạn đã đặt hàng thành công";


			$subject = "Phạm Văn Tài Shop Xin Chào";
			$model_bill = new bill();
			$model_bill->send_email($email_recive,$name,$contents,$subject);

			setcookie('email','hihi',time()+2);


			header('Location: index.php');
			  
		}
	}
?>	