<?php include_once('models/header.php'); ?>
<?php 
    $gender_male = '';
    $gender_female = '';
    $gender_other = '';

    if ($result['gender'] == 1) {
       $gender_male = 'checked';
    }elseif ($result['gender'] == 0) {
       $gender_female = 'checked';
    }else{
         $gender_other = 'checked';
    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm mới</title>
    <link rel="stylesheet" href="from.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
    <div class="">
        <?php if (isset($_COOKIE['msg_f_update'])) {

            ?>
          <script>
            toastr.success('', 'Sửa Thất Bại')
          </script>
      <?php  } ?>
        <form action="?mod=customer&act=update" id="formid" class="container" method="POST">
        <a href="?mod=customer&act=list" class="btn btn-primary">Back</a>    
        <h1 align="center">Sửa thông tin khách hàng</h1>

        <div class="row">
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Mã Khách Hàng</h5>
                    <input type="text" class="form-control" name="code" placeholder="Mã Khách Hàng" required="" value="<?= $result['code']?>" readonly>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Tên Khách Hàng</h5>
                    <input type="text" class="form-control" name="name" placeholder="Tên Khách Hàng" required="" value="<?= $result['name']?>">
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Địa Chỉ</h5>
                    <input type="text" class="form-control" name="address" placeholder="Ngày Sinh" required="" value="<?= $result['address']?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>SĐT</h5>
                    <input type="text" class="form-control" name="mobile" placeholder="SĐT" required="" value="<?= $result['mobile']?>">
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Email</h5>
                    <input type="text" class="form-control" name="email" placeholder="Email" required="" value="<?= $result['email']?>">
                </div>
            </div>
            <div class="col-sm-9">
                <h5>Giới tính</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" <?=$gender_male?>>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="0" <?=$gender_female?>>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2" <?=$gender_other?>>
                    <label class="form-check-label" for="inlineRadio2">Other</label>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <h5>Password</h5>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="" value="<?= $result['password']?>">
                </div>
            </div>
        </div>

        <div class="">
            <input type="submit" value="Sửa Khách Hàng" class="btn-submit btn-primary">
 
            
        </div>
    </form>
    </div>
</body>
</html>

 <?php include_once('models/footer.php'); ?>