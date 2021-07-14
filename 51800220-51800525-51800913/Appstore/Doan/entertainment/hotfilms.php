<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/index.css">
<body>

<!-- Header -->
<table class="header">
  <tr>
    <td><a href="../index.php"><img id="header" src="../images/apple-store-493161.png" height="60" width="60"></a></td>
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
        <li class="left-nav"><a class="active-films" class="movie" href="../films.php"><i class="fa fa-film"></i> Phim</a></li>
        <li class="left-nav"><a class="entertainment" href="../index.php"><i class="fa fa-th-list"></i> Giải trí</a></li>
        <li class="left-nav"><a class="application" href="../application.php"><i class="fa fa-th-large"></i> Ứng dụng</a></li>
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
    <!-- Phim bán chạy nhất -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Phim bán chạy nhất</h2></a>
        </div>
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <a href="../info_films/Fantasy_Island.php"><img src="../images/movies/movies-hot/1.webp"></a>
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="../info_films/Fantasy_Island.php">Fantasy Island</a>
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
            <img src="../images/movies/movies-hot/2.webp">
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
            <img src="../images/movies/movies-hot/3.webp">
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
            <img src="../images/movies/movies-hot/4.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Star Wars</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
            <img src="../images/movies/movies-hot/5.webp">
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
        <!-- Phim 6 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/6.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Jumanji</a>
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
        <!-- Phim 7 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/7.webp">
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
        <!-- Phim 8 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/8.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Spies in Disguise</a>
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
                    <a href="#">50.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 9 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/9.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Little Women</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
                    <a href="#">40.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 10 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/10.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Underwater</a>
                  <p class="info-movies">Hành động và phiêu lưu</p>
                </div>
                <div class="rate-price">
                  <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
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
        <!-- Phim 11 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/11.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Marvel: Endgame</a>
                  <p class="info-movies">Hành động và phiêu lưu</p>
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
                    <a href="#">190.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 12 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/12.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Maleficent:Mistress of Evil</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
        <!-- Phim 13 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/13.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Fast & Furious 9</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
                    <a href="#">110.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 14 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/14.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Gemini Man</a>
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
        <!-- Phim 15 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/15.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Deadpool 2</a>
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
                    <a href="#">40.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 16 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/16.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Spider-Man: Homecoming</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
                    <a href="#">60.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 17 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/17.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Trolls</a>
                  <p class="info-movies">Gia đình</p>
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
        <!-- Phim 18 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/18.webp" height="300px" width="200px">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Fast & Furious 8</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
        <!-- Phim 19 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/19.webp" height="300px" width="200px">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Mad Max: Fury Road</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
                    <a href="#">200.000đ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Phim 20 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="../images/movies/movies-hot/20.webp" height="300px" width="200px">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Justice League</a>
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
                    <a href="#">40.000đ</a>
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
<script src="../js/sticky.js"></script>
</body>
</html> 