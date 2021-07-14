<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Doan/css/app.css">
<script type="text/javascript" src="Doan/js/click_new_game_update.js"></script>
<script type="text/javascript" src="Doan/js/click_de_xuat_app.js"></script>
<script type="text/javascript" src="Doan/js/click_update.js"></script>
<script type="text/javascript" src="Doan/js/click_nangsuat.js"></script>
<script type="text/javascript" src="Doan/js/click_gps.js"></script>
<body>

<!-- Header -->
<table class="header">
  <tr>
    <td><a href="index.php"><img id="header" src="Doan/images/apple-store-493161.png" height="60" width="60"></a></td>
    <td>
      <form id="search" action="/action_page.php">
      <input id="search" type="text" placeholder="Search.." name="search">
      <button id="search" type="submit"><i class="fa fa-search"></i></button>
    </form><td>
    <td><a class="Login" href="login.php"><p id="login"><i class="fa fa-fw fa-user"></i> Login</p></a></td>
  </tr>
</table>


<div class="content">
  <!-- Phần content bên trái -->
  <div class="nav-content-l" id="navbar">
    <div class="nav-l">
      <ul class="nav-l">
        <li class="left-nav"><a class="active" class="application" href="?controller=application&action=index"><i class="fa fa-th-large"></i> Ứng dụng</a></li>   
        <li class="left-nav"><a class="movie" href="?controller=movie&action=index"><i class="fa fa-film"></i> Phim</a></li>
        <li class="left-nav"><a class="entertainment" href="?controller=entertainment&action=index"><i class="fa fa-th-list"></i> Giải trí</a></li>
      </ul>
    </div>
    <div class="content-l">
      <ul class="content-l">
        <li class="left-content"><a href="#"><span>Tài khoản</span></a></li>
        <li class="left-content"><a href="#"><span>Phương thức thanh toán</span></a></li>
        <li class="left-content"><a href="#"><span>Đăng ký của tôi</span></a></li>
        <li class="left-content"><a href="#"><span>Đổi</span></a></li>
        <li class="left-content"><a href="#"><span>Danh sách yêu thích</span></a></li>
        <li class="left-content"><a href="#"><span>HĐ của tôi</span></a></li>
        <li class="left-content"><a href="#"><span>Hướng dẫn</span></a></li>
        <li class=""></li></ul>
    </div>
  </div>


  <div class="content-r">
   <?= $content?>

    <div class="footer">
      <div class="footer-1">
        <span>@2020 Google</span>
        <a href="#">Điều khoản dịch vụ của trang web</a>
        <a href="#">Bảo mật</a>
        <a href="#">Nhà phát triển</a>
        <a href="#">Giới thiệu về App Stores</a>
        <span>| Vị trí: Việt Nam</span>
        <span>Ngôn ngữ: Tiếng việt</span>
      </div>
    </div>
    
  </div>
</div>
<script src="Doan/js/sticky.js"></script>
</body>
</html> 