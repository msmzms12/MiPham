<?php include_once('models/header_login.php') ?>

<form action="?mod=login&act=loginKH" method="POST">

        <div class="pom-agile">
          
          <input placeholder="E-mail" name="email" class="user" type="email" required="">
          <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <div class="pom-agile">
          <input  placeholder="Password" name="pwd" class="pass" type="password" required="">
          <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
        </div>
        <div class="sub-w3l">
          <h6><a href="#">Forgot Password?</a></h6>
          <h6><a href="">Creat Account?</a></h6>
          <div class="right-w3l">
            <input type="submit" value="Login">
          </div>
        </div>
      </form>


<?php include_once('models/footer_login.php') ?>