<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Doan/css/index.css">
<link rel="stylesheet" href="Doan/css/error.css">
<body>

<!-- Header -->
<table class="header">
  <tr>
    <td><a href="Doan/index.php"><img id="header" src="Doan/images/apple-store-493161.png" height="60" width="60"></a></td>
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
        <li class="left-nav"><a class="active-entertainment" class="entertainment" href="Doan/index.php"><i class="fa fa-th-list"></i> Giải trí</a></li>
        <li class="left-nav"><a class="application" href="Doan/application.php"><i class="fa fa-th-large"></i> Ứng dụng</a></li>
        <li class="left-nav"><a class="movie" href="Doan/films.php"><i class="fa fa-film"></i> Phim</a></li>
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

  </div>
</div>
<script src="js/sticky.js"></script>
</body>
</html> 
