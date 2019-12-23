  <?php include_once('models/header.php'); ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zent Group</title>



  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



  <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>


  <script>
     $(document).ready( function () {
       $('#myTable').DataTable();
   } );

</script>
</head>
<body>


  <?php if (isset($_COOKIE['addtocart'])) {

            ?>
          <script>
            toastr.success('', 'Add To Cart Success')
          </script>
      <?php  } ?>
  <div class="" style='width: 39%;float: left; margin-left: 15px;' >

    
      <h2 align="center">Danh Sách Sản Phẩm</h2>
     <a href="index.php?mod=product&act=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
     <!-- <a href="index.php?mod=login&act=logout" class="btn btn-primary">Logout</a> -->
    
     <table id="myTable" class="display">
        <thead>
          <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
        </tr>
    </thead>
    <tbody>



      <?php 
      foreach ($hienthi as $row) {
       ?>
         <tr>
           <td><?= $row['code'] ?></td>
          
        <td><?= $row['name']?></td>
        
        
        <td><?=number_format($row['price']) ?></td>
        <td>
          <a href="index.php?mod=sale&act=add2cart&code=<?= $row['code']?>" class="btn btn-success">add2cart</a> 
         

      </td>

  </tr>

<?php } ?>
</tbody>
</table>

</div>

<div style='width: 59%; float: right;'>
    <h2 align="center">HÓA ĐƠN BÁN HÀNG</h2>
    <ul>
      
      <li>Mã Khách Hàng:<?= $customer['code']?></li>
      <li>Tên Khách Hàng:<?= $customer['name']?></li>
      
      <li>Số Điện Thoại:<?= $customer['mobile']?></li>
      <li>Địa Chỉ:<?= $customer['address']?></li>
 
    </ul>
  <div class="container">
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
      $tongtien =0;
      foreach ($cart as $row) {
        $tongtien += $row['total']*$row['price'];

       ?>
      
         <tr>
          
        <td><?= $row['code'] ?></td>
        <td><?= $row['name']?></td>
        <td>
            <a href="index.php?mod=sale&act=add2cart&code=<?= $row['code']?>" class="btn btn-success">+</a>
          <?= $row['total'] ?>
            <a href="index.php?mod=sale&act=remove_product&code=<?= $row['code']?>" class="btn btn-danger">-</a>
        </td>
        <td><?= number_format($row['price']) ?>  $</td>
        <td><?= number_format($row['price']*$row['total']) ?> $</td>


       
  </tr>
  <?php } ?>
    
  
        <tr> 


        
            <td colspan="4" align="right"><b>Tổng Tiền</b></td>
            <td align=""><b style="color: red;"><?=number_format($tongtien)?> $</b></td>
          </tr>
          <tr>
            <td colspan="5">
              <form action="?mod=sale&act=payment" method="POST">
             <!--  <a href="?mod=sale&act=payment" class="btn btn-success"><i class="fa fa-credit-card" aria-hidden="true"></i>Thanh Toán</a> -->
              <input type="submit" class="btn btn-primary" value="Thanh Toán">
              <a href="?mod=sale&act=unset" class="btn btn-danger delete">Hủy Đơn Hàng</a>
              <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập tiền khách đưa...';}" name="tiennhan" style="margin-left: 350px;">
               </form>
            </td>


           <!--    <td colspan="2" align="left">
            <form action="" method="POST">
               <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập tiền khách đưa...';}" name="name" style="width: 100px;">

          </form>
        </td> -->

          </tr>
</tbody>
</table>
 
  </div> 


</div>
<script>
    $('.delete').click(function(e){
            e.preventDefault();
            var url  = $(this).attr('href');
            console.log(url);
            swal({
              title: "Bạn có muốn hủy đơn hàng?",
              incon: "Warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) =>{
                if(willDelete){
                  window.location.href=url;
                }else{
                  swal("Bạn muốn tiếp tục mua");
                }
            });
    });

</script>

</body>
</html>


<?php include_once('models/footer.php'); ?>