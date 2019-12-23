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
      <?php if (isset($_COOKIE['msg_t_update'])) {

            ?>
          <script>
            toastr.success('', 'Sửa Thành Công')
          </script>
      <?php  } ?>

     <a href="index.php?mod=product&act=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
     <!-- <a href="index.php?mod=login&act=logout" class="btn btn-primary">Logout</a> -->
      <h1 align="center">Quản lý sản phẩm</h1>
     <table id="myTable" class="display">
        <thead>
          <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Total</th>
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
        <td><img src="<?= $row['thumbnail'] ?>" alt="" style = "width: 80px; height:80px;"></td>
        <td><?= $row['total'] ?></td>
        <td><?=number_format($row['price']) ?></td>
        <td>
          <a href="index.php?mod=product&act=detail&code=<?= $row['code']?>" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a> 
          <a href="index.php?mod=product&act=edit&code=<?= $row['code']?>" class="btn btn-warning"><i class="fa fa-wrench" aria-hidden="true"></i></a>  
          <a href="index.php?mod=product&act=delete&code=<?= $row['code']?>" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

      </td>

  </tr>

<?php } ?>
</tbody>
</table>

</div>

<script>
    $('.delete').click(function(e){
            e.preventDefault();
            var url  = $(this).attr('href');
            console.log(url);
            swal({
              title: "Bạn có muốn xóa sản phẩm?",
              text: "ok để xóa sản phẩm  , cancel để hủy",
              incon: "Warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) =>{
                if(willDelete){
                  window.location.href=url;
                }else{
                  swal("Bạn chọn ko xóa");
                }
            });
    });

</script>
</body>
</html>

<?php include_once('models/footer.php'); ?>

