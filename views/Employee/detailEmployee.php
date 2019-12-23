<?php include_once('models/header.php'); ?>
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
 	<div class="container">

     <h2 align="center">THÔNG TIN NHÂN VIÊN</h2>
    
     <table class="table">
        <thead>
          <tr>
              
                <th>Code</th>
                <th>Gender</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>birthday</th>
        </tr>
    </thead>
    <tbody>



      
         <tr>
          
           <td><?= $result['code'] ?></td>
           <td>

              <?php

              if ($result['gender']==1) {
                echo "Nam";
            }else if ($result['gender']==0) {
            	echo "Nữ";
            }else{
                echo "Quỷ sứ";
                }
            ?>
    


        </td>
        <td><?= $result['name']?></td>
        <td><?= $result['email'] ?></td>
        <td><?= $result['mobile'] ?></td>
        <td><?=$result['birthday'] ?></td>
  </tr>
</tbody>
</table>

</div>
 </body>
 </html>

  <?php include_once('models/footer.php'); ?>