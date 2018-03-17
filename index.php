<?php
session_start();
require 'pdo/classes/Database.php';
require 'lib/lib.php';
$database = new Database;
include "./lib/header.php";?>
  <!-- Main Body -->
  <div class="container-fluid" style="height: calc(100vh - 62px);">
    <div class="row" style="height:100%">
      <!-- Side Menu -->
      <div class="hide" id="side-menu" >
        <div class="container-fluid" style="overflow-x: hidden;">
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-home font-s pad" ></i>Home</div></a>
          </div>
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-increasing-chart font-s pad" ></i>Trending</div></a>
          </div>
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-open-book font-s pad" ></i>Library</div></a>
          </div>
          <div class="row">
            <div class="col-12 menu-separator"></div>
          </div>
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-history font-s pad" ></i>History</div></a>
          </div>
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-mail font-s pad" ></i>Subscriptions</div></a>
          </div>
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-computer font-s pad" ></i>Browse Chennels</div></a>
          </div>
          <div class="row">
            <div class="col-12 menu-separator"></div>
          </div>
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-settings-gears font-s pad" ></i>Settings</div></a>
          </div>
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-help-web-button font-s pad" ></i>Help</div></a>
          </div>
          <div class="row">
            <a href="#" class="no-style"><div class="col-12 menu-list-item"><i class="flaticon-speech-bubble-with-text-lines font-s pad" ></i>Feedback</div></a>
          </div>
          <div class="row">
            <div class="col-12 menu-separator"></div>
          </div>
          <div class="row">
            <div class="col-12 font-xs" style="line-height:50px;min-width:240px;text-align:center;color:rgba(100,100,100,0.3);">&copy; 2018 Tulsi Care</div>
          </div>
        </div>
      </div>
      <!-- End of Side Menu -->
      <div class="wide" id="container-vid">
        <!-- Videos Row 1-->
        <div class="container vid-row" style="margin-top: 20px;display: flex;justify-content: center;flex-direction: row;flex-wrap: wrap;" >
          <div class="row vid-row-title">
            <div class="col-12 font-m no-pad" style="display:inline;text-align:left;">
              News Feed
            </div>
          </div>
          <div class="row vid-inner-container" style="display:inline; margin:15px;">
            <div class="col-12" style="padding: 0px; color:#777;">
              <!-- Nav arrow -->
              <div class="vid-slide-left" style="text-align:center;line-height:50px;" onclick="less(this)">
                <b><i class="flaticon-back" style="position:relative;left:10px;"></i></b>
              </div>
              <div class="vid-slide-right" style="text-align:center;line-height:50px;" onclick="more(this)">
                <b><i class="flaticon-next" style="position:relative;left:10px;"></i></b>
              </div>
              <!-- End Nav arrow -->
              <div class="col-12 vid no-pad" style="display: flex;overflow-x:hidden;" >
                <!-- Vid Cards -->
                <div class="vid-slide" style="display: flex;position:relative;">
                  <!-- End new card -->
                  <?php $q1 = "select * from video ";
                  //$database->bind(":id",2);
                  $rows = $database->resultset($q1);
                  //print_r($rows);
                  foreach ($rows as $row) {
                   ?>
                    <div class="vid-card">
                      <div class="">
                        <img src="<?php echo $row["thumbnail"]; ?> " alt="" class="vid-thumbnail">
                      </div>
                      <div style="height:40.935%;padding-top: 5px;">
                        <div style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;font-size: 01em;font-weight: bold;">
                          <?php echo $row["title"]; ?>
                        </div>
                        <div class="font-xxs" style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;">
                          <br>Dr. K.P. Singh
                        </div>
                        <div class="font-xxs" style="line-height:16px;padding-left:2px;padding-right:10px;">
                          <?php viewCount($row['views']);?> <b>&#183;</b> 3 months ago
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  <!-- End new card -->
                  <!-- End new card -->
                  <div class="vid-card">
                    <div class="">
                      <img src="./res/img/thumbnail/di1.webp" alt="" class="vid-thumbnail">
                    </div>
                    <div style="height:40.935%;padding-top: 5px;">
                      <div style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;font-size: 01em;font-weight: bold;">
                        The perfect treatment for diabetes and weight loss
                      </div>
                      <div class="font-xxs" style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;">
                        <br>Dr. K.P. Singh
                      </div>
                      <div class="font-xxs" style="line-height:16px;padding-left:2px;padding-right:10px;">
                        1.2K views <b>&#183;</b> 3 months ago
                      </div>
                    </div>
                  </div>
                  <!-- End new card -->
                  <!-- new card -->
                  <div class="vid-card">
                    <div class="">
                      <img src="./res/img/thumbnail/di.webp" alt="" class="vid-thumbnail">
                    </div>
                    <div style="height:40.935%;padding-top: 5px;">
                      <div style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;font-size: 01em;font-weight: bold;">
                        Expert Advise to Diabetics
                      </div>
                      <div class="font-xxs" style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;">
                        <br>Dr. K.P. Singh
                      </div>
                      <div class="font-xxs" style="line-height:16px;padding-left:2px;padding-right:10px;">
                        1.2K views <b>&#183;</b> 3 months ago
                      </div>
                    </div>
                  </div>
                  <!-- End new card -->
                  <!-- new card -->
                  <div class="vid-card">
                    <div class="">
                      <img src="./res/img/thumbnail/deep.webp" alt="" class="vid-thumbnail">
                    </div>
                    <div style="height:40.935%;padding-top: 5px;">
                      <div style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;font-size: 01em;font-weight: bold;">
                        Deep Learning Frameworks Compared
                      </div>
                      <div class="font-xxs" style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;">
                        <br>Dr. N.P. Singh
                      </div>
                      <div class="font-xxs" style="line-height:16px;padding-left:2px;padding-right:10px;">
                        4.6K views <b>&#183;</b> 1 day ago
                      </div>
                    </div>
                  </div>
                  <!-- End new card -->
                  <!-- new card -->
                  <div class="vid-card">
                    <div class="">
                      <img src="./res/img/thumbnail/cold.webp" alt="" class="vid-thumbnail">
                    </div>
                    <div style="height:40.935%;padding-top: 5px;">
                      <div style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;font-size: 01em;font-weight: bold;">
                        How to Cure a Cold Fast
                      </div>
                      <div class="font-xxs" style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;">
                        <br>Dr. Joe Alex
                      </div>
                      <div class="font-xxs" style="line-height:16px;padding-left:2px;padding-right:10px;">
                        1M views <b>&#183;</b> 2 year ago
                      </div>
                    </div>
                  </div>
                  <!-- End new card -->
                  <!-- new card -->
                  <div class="vid-card">
                    <div class="">
                      <img src="./res/img/thumbnail/hair.webp" alt="" class="vid-thumbnail">
                    </div>
                    <div style="height:40.935%;padding-top: 5px;">
                      <div style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;font-size: 01em;font-weight: bold;">
                        What to eat for healthy hair
                      </div>
                      <div class="font-xxs" style="height:32px;line-height:16px;padding-left:2px;padding-right:10px;">
                        <br> Dr. Rajput
                      </div>
                      <div class="font-xxs" style="line-height:16px;padding-left:2px;padding-right:10px;">
                        17K views <b>&#183;</b> 8 months ago
                      </div>
                    </div>
                  </div>
                  <!-- End new card -->
                </div>
                <!-- End of Vid Cards -->
              </div>
            </div>
          </div>
          <div class="row separator" style="margin-left: 19px;">
            <div class="col-12" style="border-top: 1px solid rgba(170,170,170,0.3);">

            </div>
          </div>
        </div>
        <!-- End of Videos Row 1-->

      </div>
    </div>
  </div>
  <!-- End of Main Body -->


  </body>
</html>
