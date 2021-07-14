<!--  Game mới c.nhật -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Game mới c.nhật</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="new_game_update()">Xem thêm</button>
        </div> 
      </div>
      
      <div class="all-row">
        <!-- game 1 -->
        <?php
          foreach($new_game_update as $n){
            ?>
              <div class="row-films">
                <div class="cell-films">
                  <a href="<?= $n->link_info?>"><img src="<?= $n->images?>">
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $n->link_info?>"><?= $n->name?></a>
                        <p class="info-movies"><a class="games" href="#"><?= $n->manufacture?></a></p>
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

    <!-- Đề xuất cho bạn -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Đề xuất cho bạn</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="de_xuat_app()">Xem thêm</button>
        </div> 
      </div>
     
      <div class="all-row">
         <!-- game 1 -->
        <?php
          foreach($intro_for_you as $ifu){
            ?>
              <div class="row-films">
                <div class="cell-films">
                 <a href="<?= $ifu->link_info?>"> <img src="<?= $ifu->images?>"></a>
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $ifu->link_info?>"><?= $ifu->name?></a>
                        <p class="info-movies"><a class="games" href="#"><?= $ifu->manufacture?></a></p>
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

    <!-- Vừa cập nhật -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Vừa cập nhật</h2></a>
        </div>
        <div class="best-movies-button">
          <button class="films" id="films" type="button" value="button-films" onclick="new_update_app()">Xem thêm</button>
        </div> 
      </div>
      
      <div class="all-row">
        <!-- game 1 -->
        <?php
          foreach($new_update_app as $nua){
            ?>
              <div class="row-films">
                <div class="cell-films">
                  <a href="<?= $nua->link_info?>"><img src="<?= $nua->images?>"></a>
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $nua->link_info?>"><?= $nua->name?></a>
                        <p class="info-movies"><a class="games" href="#"><?= $nua->manufacture?></a></p>
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

    <!-- Ứng dụng mới -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Ứng dụng mới</h2></a>
        </div> 
      </div>
      
      <div class="all-row">
        <!-- game 1 -->
        <?php
          foreach($new_app as $na){
            ?>
              <div class="row-films">
                <div class="cell-films">
                  <a href="<?= $na->link_info?>"><img src="<?= $na->images?>"></a>
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $na->link_info?>"><?= $na->name?></a>
                        <p class="info-movies"><a class="games" href="#"><?= $na->manufacture?></a></p>
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

     <!-- Năng suất -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies-3">
          <a href="#"><h2 class="phim">Năng suất</h2></a>
        </div>
        <div class="best-movies-button-3">
          <button class="films" id="films" type="button" value="button-films" onclick="nang_suat()">Xem thêm</button>
        </div>
      </div>
      
      <div class="all-row">
        <!-- game 1 -->
        <?php
          foreach($capacity as $c){
            ?>
              <div class="row-films">
                <div class="cell-films">
                 <a href="<?= $c->link_info?>"> <img src="<?= $c->images?>"></a>
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $c->link_info?>"><?= $c->name?></a>
                        <p class="info-movies"><a class="games" href="#"><?= $c->manufacture?></a></p>
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

    <!-- Ứng dụng phổ biến -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Ứng dụng phổ biến</h2></a>
        </div>
      </div>
      <div class="all-row">
        <!-- game 1 -->
        <?php
          foreach($popular_app as $pa){
            ?>
              <div class="row-films">
                <div class="cell-films">
                 <a href="<?= $pa->link_info?>"> <img src="<?= $pa->images?>"></a>
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $pa->link_info?>"><?= $pa->name?></a>
                        <p class="info-movies"><a class="games" href="#"><?= $pa->manufacture?></a></p>
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

    <!-- Bản đồ-GPS -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies-3">
          <a href="#"><h2 class="phim">Map-GPS</h2></a>
        </div>
        <div class="best-movies-button-3">
          <button class="films" id="films" type="button" value="button-films" onclick="gps()">Xem thêm</button>
        </div>
      </div>
      
      <div class="all-row">
        <!-- game 1 -->
        <?php
          foreach($map as $m){
            ?>
              <div class="row-films">
                <div class="cell-films">
                 <a href="<?= $m->link_info?>"> <img src="<?= $m->images?>"></a>
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $m->images?>"><?= $m->name?></a>
                        <p class="info-movies"><a class="games" href="#"><?= $m->manufacture?></a></p>
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

    <!-- Công cụ và tiện ích -->
    <div class="table-films">
      <div class="list-movies-hot">
        <div class="best-movies">
          <a href="#"><h2 class="phim">Công cụ và tiện ích</h2></a>
        </div>
      </div>
      <div class="all-row">
        <!-- game 1 -->
        <?php
          foreach($benaficial_tool as $bt){
            ?>
              <div class="row-films">
                <div class="cell-films">
                  <a href="<?= $bt->link_info?>"><img src="<?= $bt->images?>"></a>
                  <div class="padding-films">
                    <div class="info-films">
                      <div class="advertise-movies">
                        <a class="movies" href="<?= $bt->link_info?>"><?= $bt->name?></a>
                        <p class="info-movies"><a class="games" href="#"><?= $bt->manufacture?></a></p>
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