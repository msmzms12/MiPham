<?php 
	include_once('models/Employee.php');
	include_once('models/Customer.php');
	class LoginController{


		function formlogin(){
			require_once('views/Login/login.php');

		}

		function formloginKH(){
			require_once('views/Login/loginKH.php');

		}

		function login(){
			//lấy dữ liệu từ form
			    
			$data['email']=$_POST['email'];
			$data['pwd']=$_POST['pwd'];

			
			$data['pwd'] = hash("md5", $data['pwd']);

			    
			//kiem tra trong database
			$employee= new Employee();
			$result=$employee->check($data);
			
			if ($result!=null) {
				$_SESSION['nv']=$result;

				$_SESSION['islogin']=1;
				header('Location: ?mod=sale&act=creat_bill');
			}else{
				
				header('Location: ?mod=login&act=formlogin');
			}



		}

		function loginKH(){
			//lấy dữ liệu từ form

			$data['email']=$_POST['email'];
			$data['pwd']=$_POST['pwd'];
			

			    
			//kiem tra trong database
			$customer= new Customer();
			$result=$customer->check($data);
			
			if ($result!=null) {
				$_SESSION['kh']=$result;

				    
				$_SESSION['islogin']=1;
				header('Location: index.php?');
			}else{
				
				header('Location: ?mod=login&act=formloginKH');
			}



		}

		function logout(){
			session_destroy();
			header('Location: ?mod=login&act=formlogin');
		}


		function logoutKH(){
			session_destroy();
			header('Location: ?mod=login&act=formloginKH');
		}

		function error(){
			header('Location: http://phamvantai.net/hw.php16.zent/Froject/models/erro.php');
		}
	}


 ?>