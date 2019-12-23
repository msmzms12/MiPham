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
       $('.myTable').DataTable();
   } );




</script>
</head>
<body>
  <div class="" style="margin-left: 15px;">  
   
     


     <h2 align="center">Top Nhân Viên Bán Được Nhiều Sản Phẩm Nhất</h2>

    <!--  <a href="index.php?mod=customer&act=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a> -->
     <table  class="display myTable">
        <thead>
          <tr>
             
                <th>Code</th>
                <th>Name</th>
                <th>Birhday</th>
                <th>Email</th>
                <th style = "color: red;">SUM</th>
        </tr>
    </thead>
    <tbody>



      <?php 
     
      foreach ($thongkeNv as $row) {
     
       ?>
         <tr>
         
           <td><?= $row['maNV'] ?></td>
        <td><?= $row['name']?></td>
        <td><?= $row['birthday'] ?></td>
        <td><?= $row['email'] ?></td>

        <td style = "color: red;"><?= $row['sum'] ?></td>
   
  </tr>

<?php } ?>
</tbody>
</table>

</div>






<div class="" style="margin-left: 15px;">  
   
     


     <h2 align="center">Top Sản Phẩm Bán Chạy Nhất</h2>

    <!--  <a href="index.php?mod=customer&act=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a> -->
     <table class="display myTable">
        <thead>
          <tr>
              
                <th>Code</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Unit</th>
                <th style = "color: red;">SUM</th>
        </tr>
    </thead>
    <tbody>



      <?php 
     
      foreach ($thongkeSp as $row) {
     
       ?>
         <tr>
        
           <td><?= $row['maSP'] ?></td>
        <td><?= $row['name']?></td>
        <td><img src="<?= $row['thumbnail'] ?>" alt="" style = "width: 60px; height:60px;"></td>
        <td><?= $row['tb'] ?></td>

        <td style = "color: red;"><?= $row['sum'] ?></td>
   
  </tr>

<?php } ?>
</tbody>
</table>

</div>
</body>
</html>


<?php include_once('models/footer.php'); ?>



