<!-- Phim bán chạy nhất -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Phim bán chạy nhất</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="hot_films()">Xem thêm</button>
        </div> 
      </div>
      

      <div class="all-row">
        <!-- Phim 1 -->
        <?php
          foreach($hot_films as $hf){
            ?>
              <div class="row-films">
                <div class="cell-films">
                  <a href="<?= $hf->link_info?>"><img src="<?= $hf->images?>"></a>
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $hf->link_info?>"><?= $hf->name?></a>
                        <p class="info-movies"><?= $hf->type?></p>
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
                          <a href="#"><?= $hf->price?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php
          }
        ?>
                
      </div>
    </div>
    <!-- Người khác chơi gì -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Người khác chơi gì</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="hot_game()">Xem thêm</button>
        </div> 
      </div>
      <!-- game 1 -->

      <div class="all-row">
        <?php
        foreach($people_players as $pl){
          ?>
            <div class="row-films">
              <div class="cell-films">
                <a href="<?= $pl->link_info?>"><img src="<?= $pl->images?>"></a>
                <div class="padding-films">
                  <div class="info-films">
                    <div class="advertise-movies">
                      <a class="movies" href="<?= $pl->link_info?>"><?= $pl->name?></a>
                      <p class="info-movies"><a class="games" href="#"><?= $pl->manufacture?></a></p>
                    </div>
                    <div class="rate-price">
                      <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          <?php
        }

      ?>
        
       
      </div>
    </div>

    <!-- phim mới ra mắt -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Phim mới ra mắt</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="phim_moi()">Xem thêm</button>
        </div> 
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <img src="images/movies/6.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Waves</a>
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
                    <a href="#">110.000đ</a>
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
            <img src="images/movies/2.webp">
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
            <img src="images/movies/7.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Bad Boys For Life</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
            <img src="images/movies/1.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Fantasy Island</a>
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
            <img src="images/movies/8.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Downhill</a>
                  <p class="info-movies">Hài Kịch</p>
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
      </div>
    </div>
    <!-- Phim đề xuất cho bạn -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Phim đề xuất cho bạn</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="de_xuat_phim()">Xem thêm</button>
        </div> 
      </div>
      <!-- Phim 1 -->
      <div class="all-row">
        <div class="row-films">
          <div class="cell-films">
            <img src="images/movies/9.webp">
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
        <!-- Phim 2 -->
        <div class="row-films">
          <div class="cell-films">
            <img src="images/movies/10.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Kung Fu Panda</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
            <img src="images/movies/11.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Happy Death Day 2U</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
            <img src="images/movies/12.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Bruce Almighty</a>
                  <p class="info-movies">Âm thanh tiếng Anh</p>
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
            <img src="images/movies/13.webp">
            <div class="padding-films">
              <div class="info-films">
                <div class="advertise-movies">
                  <a class="movies" href="#">Kung Fu Panda 2</a>
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