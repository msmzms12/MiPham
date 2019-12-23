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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>




  <script>


     $(document).ready( function () {
       $('#myTable').DataTable();
   } );




</script>
</head>
<body>
  <div class="" style="margin-left: 15px;">  
     <?php if (isset($_COOKIE['msg_t'])) {

            ?>
          <script>
            toastr.success('', 'Thêm Mới Thành Công')
          </script>
      <?php  } ?>
     


     <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
      <p><i class="fa fa-window-minimize" aria-hidden="true"></i>Vui lòng tìm khách hàng sau đo click vào <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></p>
      <p><i class="fa fa-window-minimize" aria-hidden="true"></i> Nếu chưa có thông tin khách hàng, vui lòng tạo mới khách hàng trước</p>

     <a href="index.php?mod=customer&act=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
     <table id="myTable" class="display">
        <thead>
          <tr>
                <th>Code</th>
                <th>Gender</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Action</th>
        </tr>
    </thead>
    <tbody>



      <?php 
      foreach ($hienthi as $row) {
       ?>
         <tr>
           <td><?= $row['code'] ?></td>
           <td>

              <?php

              if ($row['gender']==1) {
                echo "Nam";
           }else if ($row['gender']==0) {
                echo "Nữ";
            }else{
                echo "Quỷ sứ";
                }

            ?>


        </td>
        <td><?= $row['name']?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['mobile'] ?></td>
        <td><?=$row['address'] ?></td>
        <td>
          <a href="index.php?mod=sale&act=purchase&code=<?= $row['code']?>" class="btn btn-success"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
         

      </td>

  </tr>

<?php } ?>
</tbody>
</table>

</div>
</body>
</html>




 <?php include_once('models/footer.php'); ?>
