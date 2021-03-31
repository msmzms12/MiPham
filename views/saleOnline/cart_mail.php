 <?php 
	   	$cartO = $_SESSION['cartO'];
	   	    echo "<pre>";
	   	        print_r($cartO);
	   	    echo"</pre>";

 ?>



 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cart</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container table-responsive" >
		
		<h1 align="center">Sản Phẩm Bạn Đã Mua</h1>
		<table class="table ">
			<thead>
				<tr>
					 <th style="color: black;">Code</th>
               	 <th style="color: black;">Name</th>
              	<th style="color: black;">Thumnail</th>
                <th style="color: black;">Total</th>
                <th style="color: black;">Price</th>
                <th style="color: black;">Money</th>
					

				</tr>
			</thead>
			<tbody>
				<?php 
				$tongtien = 0;
				foreach ($cartO as  $hienthi) {
					$tongtien += $hienthi['DonGia']*$hienthi['Soluong'];

					?>
					<tr>

						<td ><?=$hienthi['code']?></td>
						<td ><?=$hienthi['name']?></td>
						<td ><?=$hienthi['thumbnail']?></td>
						<td ><?=$hienthi['total']?></td>
						<td ><?=number_format($hienthi['price'])?></td>
						<td ><?=number_format($hienthi['price']*$hienthi['total'])?></td>

						
					
						
				<?php } ?>
					<tr> 
						<td colspan="4" align="right"><b>Tổng Tiền</b></td>
						<td align="right"><b style="color: red;"><?=number_format($tongtien)?> VNĐ</b></td></tr>
				
					</tr>

					




				</tbody>
			</table>
		</div>

	</body>
	</html>