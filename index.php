<?php 
include_once('helper/Middleware.php');
$check= new Middleware();
session_start();

$modul = isset($_GET['mod'])?$_GET['mod']:'';
$action = isset($_GET['act'])?$_GET['act']:'';

switch ($modul) {
	case 'employee':
	$check->checklogin();
	include_once('controllers/EmployeeController.php');
	$controller = new EmployeeController();

	switch ($action) {
		case 'list':
		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'add':
		$controller->add();
		break;
		case 'store':
		$controller->store();
		break;
		case 'update':
		$controller->update();
		break;
		case 'edit':
		$controller->edit();
		break;
		case 'delete':
		$controller->delete();
		break;

		default:
		$controller->error();
		break;
	}


	break;

	case 'customer':
	$check->checklogin();
	include_once('controllers/CustomerController.php');
	$controller = new CustomerController();

	switch ($action) {
		case 'list':
		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'add':
		$controller->add();
		break;
		case 'creat':
		$controller->creat();
		break;
		case 'store':
		$controller->store();
		break;
		case 'update':
		$controller->update();
		break;
		case 'edit':
		$controller->edit();
		break;
		case 'delete':
		$controller->delete();
		break;
		case 'creatAct':
		$controller->creatAct();
		break;
		default:
		$controller->error();
		break;
	}


	break;

	
	case 'product':
	$check->checklogin();
	include_once('controllers/ProductController.php');
	$controller = new ProductController();

	switch ($action) {
		case 'list':

		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'add':
		$controller->add();
		break;
		case 'store':
		$controller->store();
		break;
		case 'update':
		$controller->update();
		break;
		case 'edit':
		$controller->edit();
		break;
		case 'delete':
		$controller->delete();
		break;

		default:
		$controller->error();
		break;
	}


	break;

	case 'sale':
	$check->checklogin();
	include_once('controllers/SaleController.php');
	$controller = new SaleController();

	switch ($action) {
		case 'creat_bill':
		$controller->creat_bill();
		break;

		case 'purchase':
		$controller->purchase();
		break;

		case 'sale':
		$controller->sale();
		break;

		case 'add2cart':
		$controller->add2cart();
		break;


		case 'payment':
		$controller->payment();
		break;

		case 'remove_product':
		$controller->remove_product();
		break;

		case 'unset':
		$controller->unset();
		break;

		case 'bestNV':
		$controller->bestNV();
		break;


		case 'billDetail':
		$controller->billDetail();
		break;


		default:
		$controller->error();
		break;
	}


	break;

	case 'saleOnline':
	include_once('controllers/HomeController.php');
	$controller = new HomeController();

	switch ($action) {

		case 'store':
		$controller->store();
		break;

		case 'contact':
		$controller->contact();
		break;

		case 'contactadd':
		$controller->contactADD();
		break;

		case 'detail':
		$controller->detail();
		break;
		
		case 'add2cartO':
		$controller->add2cartO();
		break;

		case 'add2cartDetail':
		$controller->add2cartDetail();
		break;

		case 'add2cartOcong':
		$controller->add2cartOcong();
		break;

		case 'cart':
		$controller->cart();
		break;

		case 'hoadon':
		$controller->hoadon();
		break;

		case 'thanhtoan':
		$controller->thanhtoan();
		break;

		case 'payment':
		$controller->payment();
		break;

		case 'remove_product':
		$controller->remove_product();
		break;

		case 'unset':
		$controller->unset();
		break;


		case 'send_email':
		$controller->send_email();
		break;


		case 'billDetail':
		$controller->billDetail();
		break;



		default:
		$controller->error();
		break;
	}


	break;



	case 'login':

	include_once('controllers/LoginController.php');
	$controller = new LoginController();

	switch ($action) {
		case 'formlogin':
		$controller->formlogin();
		break;

		case 'formloginKH':
		$controller->formloginKH();
		break;

		case 'login':
		$controller->login();
		break;

		case 'loginKH':
		$controller->loginKH();
		break;
		
		case 'logout':
		$controller->logout();
		break;

		case 'logoutKH':
		$controller->logoutKH();
		break;

		default:
		$controller->error();
		break;
	}


	break;


	default:
	include_once('controllers/SaleController.php');
	include_once('controllers/HomeController.php');
	$controller = new HomeController();
	
	$controller->list();
	

	break;
}

?>