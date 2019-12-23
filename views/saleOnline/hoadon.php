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
    <!--  <?php if (isset($_COOKIE['msg_t'])) {

            ?>
          <script>
            toastr.success('', 'Thêm Mới Thành Công')
          </script>
      <?php  } ?> -->
     


     <h2 align="center">QUẢN LÝ HÓA ĐƠN</h2>

     <a href="index.php?mod=customer&act=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true" ></i></a>
     <table id="myTable" class="display">
        <thead>
          <tr>
                <th>Code HĐ</th>
                <th>Code NV</th>
                <th>Code KH</th>
                <th>Time</th>
                <th>Action</th>
        </tr>
    </thead>
    <tbody>



      <?php 
      foreach ($qlhoadon as $row) {
       ?>
         <tr>
           <td><?= $row['maHĐ'] ?></td>
        <td><?= $row['maNV']?></td>
        <td><?= $row['maKH'] ?></td>
        <td><?= $row['ngayban'] ?></td>
        <td>

        <a href="?mod=saleOnline&act=thanhtoan&maHĐ=<?= $row['maHĐ'] ?>" class="<?php if ($row['action']==0) {
        echo "btn btn-warning";
      }else{
        echo "btn btn-danger";
      }
       ?>" ><?php if ($row['action']==0) {
        echo "Đã Xử Lý";
      }else{
        echo "Chưa Xử Lý";
      }
       ?></a>  



       

		
        </td>
   
  </tr>

<?php } ?>
</tbody>
</table>

</div>
</body>
</html>



<?php include_once('models/footer.php'); ?>


