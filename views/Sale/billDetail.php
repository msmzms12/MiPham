<?php include_once('models/header.php'); ?>

<?php 

$nhanvien=$_SESSION['nv'];
       
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="" style="margin-left: 15px;">

     <div class="row">
         <div class="col-lg-6">
             <h2 style="margin-left: 28px;">PHẠM VĂN TÀI SHOP</h2>

                <ul>
            <li>Địa Chỉ : Phù Đổng - Gia Lâm - Hà Nội</li>
        <li>SĐT : 0969787998</li>
        <li style="list-style: none;">--------------------------------------------</li>
                </ul>
         </div>


         <div class="col-lg-6">
             <h2>HÓA ĐƠN KHÁCH HÀNG</h2>
             <ul>
                 <li>Mã Hóa Đơn:  <?=$chitiethoadon[0]['maHĐ']?></li>
                 <li>Ngày Bán: <?=$hoadon[0]['ngayban']?></li>
                  
             </ul>
         </div>
     </div>

     <div><ul>
         
         <li>Cảm Ơn <?=$hoadon[0]['name']?> đã đến mua hàng</li>
         <li>Địa Chỉ : <?=$hoadon[0]['address']?></li>
         <li>SĐT: <?=$hoadon[0]['mobile']?></li>
     </ul></div>


     <!-- <p style="margin-left: 28px;">Cảm ơn bạn đã đến mua hàng</p> -->



    
     <table class="table">
        <thead>
          <tr>
                <th style="color: black;">Code</th>
                <th style="color: black;">Name</th>
                <th style="color: black;">Total</th>
                <th style="color: black;">Price</th>
                <th style="color: black;">Money</th>
        </tr>
    </thead>
    <tbody>


	<?php 
		$tongtien= 0;
		foreach ($chitiethoadon as $value) {

			$tongtien += $value['soluong']*$value['giaban'];
		
	 ?>
		<tr>
			<td><?=$value['maSP']?></td>
			<td><?=$value['name']?></td>
			<td><?=$value['soluong']?></td>
			<td><?= number_format($value['giaban'])?> $</td>
			<td><?=number_format($value['thanhtien'])?> $</td>
		</tr>
		
      
    <?php } ?>    
		<tr> 
            <td colspan="4" align="right"><b> </b></td>
            <td align=""><b style="color: red;"><?=number_format($tongtien)?> $</b></td></tr>
            
        </tr> 
        <tr> 
           <td colspan="5"> <hr color="black" size="5"></td>
          
            
        </tr>   
        <tr> 
            <td colspan="4" align="right"><b>Tiên Nhận Của Khách</b></td>
            <td align=""><b style="color: red;"><?=number_format($hoadon[0]['tiennhan'])?> $</b></td></tr>
            
        <tr>  
            <tr> 
            <td colspan="4" align="right"><b>Tổng Hóa Đơn</b></td>
            <td align=""><b style="color: red;"><?=number_format($tongtien)?> $</b></td></tr>

        </tr>
         <tr> 
            <td colspan="4" align="right"><b>Tiền Trả Lại Khách</b></td>
            <td align=""><b style="color: red;"><?=number_format($hoadon[0]['tienthua'])?> $</b></td></tr>
            
        </tr>   

        <tr>
            <td colspan="5" align="right" style="padding-right: 100px;"><h4>Nhân Viên Bán Hàng  :  <?=$nhanvien['name']?></h4></td>
        </tr>


</tbody>
</table>

</div>
 </body>
 </html>

 <?php include_once('models/footer.php'); ?>