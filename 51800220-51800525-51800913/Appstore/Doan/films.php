<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/index.css">
<script type="text/javascript" src="js/click_newfilms.js"></script>
<script type="text/javascript" src="js/click_offerfilms.js"></script>
<script type="text/javascript" src="js/click_sellfilms.js"></script>
<script type="text/javascript" src="js/click_horrorfilms.js"></script>
<script type="text/javascript" src="js/click_family.js"></script>
<script type="text/javascript" src="js/click_sensationalfilms.js"></script>


<body>

<!-- Header -->
<table class="header">
  <tr>
    <td><a href="index.php"><img id="header" src="images/apple-store-493161.png" height="60" width="60"></a></td>
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
        <li class="left-nav"><a class="active-films" class="movie" href="films.php"><i class="fa fa-film"></i> Phim</a></li>
        <li class="left-nav"><a class="entertainment" href="index.php"><i class="fa fa-th-list"></i> Giải trí</a></li>
        <li class="left-nav"><a class="application" href="application.php"><i class="fa fa-th-large"></i> Ứng dụng</a></li>
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
    <!-- Phim mới -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Phim mới</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="new_films()">Xem thêm</button>
        </div> 
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/1.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">The Call of the Wild</a>
                  <p class="info-movies">Âm thanh nhiều thứ tiếng</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">50.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 2 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/2.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Downhill</a>
                  <p class="info-movies">Hài kịch</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">50.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 3 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/3.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Waves</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">110.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 4 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/4.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Onward</a>
                  <p class="info-movies">Gia đình</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 5 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/5.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Fantasy island</a>
                  <p class="info-movies">Âm thanh nhiều thứ tiếng</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Đề xuất cho bạn -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Đề xuất cho bạn</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="offer_films()">Xem thêm</button>
        </div> 
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/6.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Kung Fu Panda</a>
                  <p class="info-movies"><a class="games" href="#">Âm thanh tiếng Tiếng Anh</a></p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">220.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 2 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/7.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Happy Death Day</a>
                  <p class="info-movies"><a class="games" href="#">Âm thanh tiếng Tiếng Anh</a></p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 3 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/8.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Bruce Almighty</a>
                  <p class="info-movies"><a class="games" href="#">Âm thanh tiếng Tiếng Anh</a></p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">60.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 4 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/9.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Kung Fu Panda 2</a>
                  <p class="info-movies"><a class="games" href="#">Âm thanh tiếng Tiếng Anh</a></p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 5 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/10.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Incredibles 2</a>
                  <p class="info-movies"><a class="games" href="#">Âm thanh tiếng Tiếng Anh</a></p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">166.699đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


    <!-- Phim bán chạy nhất -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Phim bán chạy nhất</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="sell_films()">Xem thêm</button>
        </div> 
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/11.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Bad Boys For Life</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 2 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/12.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Start Wars</a>
                  <p class="info-movies">Âm thanh tiếng tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 3 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/13.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Frozen II</a>
                  <p class="info-movies">Gia đình</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 4 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/14.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Jumanji The next level</a>
                  <p class="info-movies">Âm thanh nhiều thứ tiếng</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 5 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/15.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Bloodshot</a>
                  <p class="info-movies">Hành động và phiêu lưu</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Phim kinh dị tàn bạo -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Phim kinh dị tàn bạo</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="horror_films()">Xem thêm</button>
        </div> 
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/16.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Cabin Fever2:Spring Fever</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 2 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/17.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">House of 1000 Corpses</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 3 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/18.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Saw IV</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 4 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/19.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Repo! the Genetic Opera</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 5 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/20.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">The Devil's Rejects</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Phim gia đình -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Phim gia đình</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="family_films()">Xem thêm</button>
        </div> 
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/21.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">The Lego Movie</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">200.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 2 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/22.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Walking With Dinosaurs</a>
                  <p class="info-movies">Hành động và phiêu lưu</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">40.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 3 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/23.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">The Angry Birds Movie</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">60.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 4 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/24.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Maleficent</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">60.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 5 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/25.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Kung Fu Panda</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Những bộ phim ly kỳ -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Những bộ phim ly kỳ</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="sensational_films()">Xem thêm</button>
        </div> 
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/26.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Godzilla(2014)</a>
                  <p class="info-movies">Hành động và phiêu lưu</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">200.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 2 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/27.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">The Conjuring 2</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#"40.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 3 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/28.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Fast & Furious</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">110.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 4 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/29.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Tyler Perry's Acrimony</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">200.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 5 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/films/30.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">The Beguiled</a>
                  <p class="info-movies">Âm thanh tiếng Tiếng Anh</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <div class="price">
                    <div class="price-pro">
                    <a href="#">80.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





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
<script src="js/sticky.js"></script>
</body>
</html> 
