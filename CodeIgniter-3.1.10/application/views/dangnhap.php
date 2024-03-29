<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>

  <title>Đăng nhập </title>
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico">
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt="" style="text-align: center">
          <img src="assets/images/img-01.png" alt="IMG"></br></br>
          <h1>QUẢN LÝ ĐIỂM SINH VIÊN</h1>
        </div>
        <form class="login100-form validate-form" method="POST" id="myForm" action="login">
          <span class="login100-form-title">ĐĂNG NHẬP</span>
          <?php $class != ''?$class:'' ?>
          <?php $error != ''?$error:'' ?>
          <div class="wrap-input100 validate-input <?php echo $class ?>" autocomplete="off" data-validate="<?php echo $error?>">
            <input class="input100" type="text" name="username" placeholder="Tài khoản" autocomplete="off" >
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="password" placeholder="Mật khẩu">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 ">
              <select class="input100"  name= "khoa" >
                  <option  value=''disabled selected>Chọn một khoa</option>
                  <option value='serverA'>Công nghệ thông tin</option>
                  <option  value='serverB'>Viễn thông</option>
              </select>
          </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">Đăng nhập</button>
          </div>
          <div class="text-center p-t-136">
            <a class="txt2" href="./dangki.html">Tạo tài khoản
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/vendor/bootstrap/js/popper.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/select2/select2.min.js"></script>
  <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({ scale: 1.1 })
  </script>
  <script src="assets/js/dangky_dangnhap.js">
  </script>
</body>

</html>