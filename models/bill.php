<?php 
	include_once('models/model.php');
	class bill extends Model
	{
		var $table = "hoa_don";
		var $primary_key = "maHĐ";	


		function find($code){

				$data = array();
			  $query = "SELECT hoa_don.* , khach_hang.name as name ,khach_hang.mobile as mobile, khach_hang.address as address FROM hoa_don JOIN khach_hang ON hoa_don.maKH = khach_hang.code WHERE  maHĐ = '".$code."'";
				// Thuc thi cau lenh truy van co so du lieu
			  $result = $this->conn->query($query);

			  while ($row = $result->fetch_assoc()) {
			  		$data[]= $row;
			  	

			  }
			  return $data;

		}


		function bestNV(){
				$data = array();
			  $query = "SELECT nhan_vien.*,maNV,SUM(tongtien)as sum FROM hoa_don JOIN nhan_vien ON hoa_don.maNV = nhan_vien.code GROUP BY maNV";
				// Thuc thi cau lenh truy van co so du lieu
			  $result = $this->conn->query($query);

			  while ($row = $result->fetch_assoc()) {
			  		$data[]= $row;
			  	

			  }
			  return $data;
		}


		function send_email($email_recive,$name,$contents,$subject){
        //https://www.google.com/settings/security/lesssecureapps
        // Khai báo thư viên phpmailer
        require "phpmailer/PHPMailerAutoload.php";
        require "phpmailer/class.phpmailer.php";
        // Khai báo tạo PHPMailer
        $mail = new PHPMailer();
        //Khai báo gửi mail bằng SMTP
        $mail->IsSMTP();
        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
        // 1 = Thông báo lỗi ở client
        // 2 = Thông báo lỗi cả client và lỗi ở server
        // To load the French version
        $mail->setLanguage('vi', '/optional/path/to/language/directory/');
        $mail->SMTPDebug  = 1;
        $mail->SMTPOptions = array (
        'ssl' => array(
        'verify_peer'  => false,
        'verify_peer_name'  => false,
        'allow_self_signed' => true)
        );
        $mail->CharSet="UTF-8";
        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
        $mail->Port       = 587; // cổng để gửi mail
        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
        $mail->SMTPAuth   = true; //Xác thực SMTP
        $mail->Username   = "msmzms12@gmail.com"; // Tên đăng nhập tài khoản Gmail
        $mail->Password   = "phamvantai98"; //Mật khẩu của gmail
        $mail->SetFrom("msmzms12@gmail.com", "Shop Giầy"); // Thông tin người gửi
        $mail->AddReplyTo("msmzms12@gmail.comm","Shop Giầy");// Ấn định email sẽ nhận khi người dùng reply lại.
        $mail->AddAddress($email_recive, $name);//Email của người nhận
        //$mail->AddCC($email_recive, $name);//Email của người nhận
        $mail->Subject = $subject; //Tiêu đề của thư
        $mail->MsgHTML($contents); //Nội dung của bức thư.
        //$mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
        // Gửi thư với tập tin html
        $mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach

        //Tiến hành gửi email và kiểm tra lỗi
        if(!$mail->Send()) {
            echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
            return false;
        } else {
               header('Location: index.php');
                return true;
        } 
    }



		
	}




 ?>