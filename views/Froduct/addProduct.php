<?php include_once('models/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm mới</title>
    <link rel="stylesheet" href="from.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
    <div class="container">
         <?php if (isset($_COOKIE['msg_f'])) {

            ?>
            <script>
        toastr.error('', 'Thêm Mới Thất Bại')
          </script>
      <?php  } ?>
        <form action="?mod=product&act=store" id="formid" class="container" method="POST">
            <a href="?mod=product&act=list" class="btn btn-primary">Back</a>    
        <h1 align="center">Thêm mới sản phẩm</h1>
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Mã Sản Phẩm</h5>
                    <input type="text" class="form-control" name="code" placeholder="Mã Sản Phẩm" required="">
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Tên Sản Phẩm</h5>
                    <input type="text" class="form-control" name="name" placeholder="Tên Sản Phẩm" required="">
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Số Lượng</h5>
                    <input type="text" class="form-control" name="total" placeholder="Số Lượng" required="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Đơn Giá</h5>
                    <input type="text" class="form-control" name="price" placeholder="Đơn Giá" required="">
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Thumbnail</h5>
                    <input type="text" class="form-control" name="thumbnail" placeholder="Thumbnail" required="">
                </div>
            </div>
           
        </div>

        <div class="">
            <input type="submit" value="Thêm sản phẩm" class="btn-submit btn-primary">

        </div>
    </form>
    </div>
</body>
</html>


 <?php include_once('models/footer.php'); ?>