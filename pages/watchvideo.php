<!DOCTYPE html>
<html>
  <head>
    <!-- CSS -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End of CSS -->

    <!-- Icon -->
      <link rel="icon" href="../res/img/icon.png">
    <!-- End of Icon -->

    <!-- Title -->
      <title>Tulsi Care</title>
    <!-- End of Title -->

    <!-- CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../res/font/icon/flaticon.css">
    <!-- End of CSS -->

    <!-- JavaScript -->
      <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- End of JavaScript -->

    <!-- Color theme -->
      <link rel="stylesheet" href="../css/style.css">
    <!-- End of Color Theme -->
    <!-- Script -->
    <script>
      $(document).ready(function(){
          $("#menu").click(function(){
            $("#side-menu").fadeToggle(20);
          });
          //console.log($(".vid-slide"));
          var vid_body = $(".vid").width()+30;
          var max_vid_width = $(".vid-slide").width();
          //console.log(vid_body);
          //console.log(max_vid_width);
          if(max_vid_width < vid_body){
            $(".vid-slide-right").css("display","none");
            $(".vid-slide-left").css("display","none");
          }
          else {
            $(".vid-slide-right").css("display","block");
          }
      });
      function more(element) {
        var e =$(element).parent().children(".vid").children(".vid-slide");
        var total_vid=e.width()/218;
        var vid_body = $(".vid").width();
        //console.log(vid_body);
        var max_vid_width = e.width();
        var vid_hidden=(max_vid_width-vid_body)/218;
        var check =vid_hidden*218;
        if( check!= e.css("left").slice(0,-2)*-1 && check > e.css("left").slice(0,-2)*-1 ){
          e.animate({left:'-=218px'},200);
          $(element).siblings(".vid-slide-left").css("display","block");
        }
        if (check < e.css("left").slice(0,-2)*-1) {
          e.animate({left:(-1*check)+"px"},200);
          $(element).css("display","none");
        }
        if(check  -  e.css("left").slice(0,-2)*-1 <= 218 ){
          e.animate({left:(-1*check)+"px"},200);
          $(element).css("display","none");
        }
      }
      function less(element) {
        var e =$(element).parent().children(".vid").children(".vid-slide");
        var total_vid=e.width()/218;
        var vid_body = $(".vid").width();
        var max_vid_width = e.width();
        var vid_hidden=(max_vid_width-vid_body)/218;
        var check = 0;
        if( check!=  e.css("left").slice(0,-2) && check >  e.css("left").slice(0,-2) ){
           e.animate({left:'+=218px'},200);
          $(element).siblings(".vid-slide-right").css("display","block");
        }
        if(check <  e.css("left").slice(0,-2) ){
           e.animate({left:'0px'},200);
          $(element).css("display","none");
        }
        if(check -  e.css("left").slice(0,-2) <= 218 ){
           e.animate({left:(0)+"px"},200);
          $(element).css("display","none");
        }
      }

    </script>
    <!-- End of Script-->
  </head>
  <body onkeypress="return myKeyPress(event)">

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top" style="box-shadow: 0 0 8px rgba(0,0,0,0.5);">
    <div class="container-fluid" style="height: 46px;">
      <div class="  col-md-8 col-5">
        <ul class="navbar-nav" style="flex-direction: row;">
          <li class="nav-item">
            <!-- Tulsi MENU -->
            <a class="navbar-brand dark-icon" id="menu">
              <i class="flaticon-line-menu font-xs"></i>
            </a>
          </li>
          <!-- End of Tulsi MENU -->
          <!-- Tulsi LOGO -->
          <li class="nav-item">
            <a class="navbar-brand" href="#" style="margin-right:5px;">
              <img src="../res/img/icon.png" alt="Logo" style="width:1.8em;margin-left:1em;">
            </a>
          </li>
          <!-- End of Tulsi LOGO -->
          <!-- Tulsi Title -->
          <li class="nav-item">
            <a class="navbar-brand" id="brand-title" href="#">Tulsi Care</a>
          </li>
          <!-- End of Tulsi Tulsi -->
          <!-- Search Bar -->
          <li class="nav-item" style="width:50%;line-height: 46px;" >
            <form class="form-inline  show-search" id="search" action="/action_page.php" >
              <div class="input-group" style="width:100%;">
                <input type="text" class="form-control" placeholder="Search"/>
                <button class="input-group-addon" type="submit" style="cursor:pointer;padding: 5px;"> <i class="flaticon-search font-xxs" style="position:relative;left:10px;color:#777;"></i></button>
              </div>
            </form>
          </li>
          <!-- End of Search Bar -->
        </ul>
      </div>
      <!-- Links -->
        <div class="  col-md-4 col-7" style="padding: 0px;">
          <ul class="navbar-nav " id="links" style="float:right; flex-direction: row;" >
            <!-- Search Button -->
            <li class="nav-item search-icon">
              <a class="navbar-brand dark-icon no-pad-l no-pad-r" href="#">
                <i class="flaticon-search font-xs"></i>
              </a>
            </li>
            <!-- End of Search Button -->
            <li class="nav-item btn-group">
              <a class="navbar-brand dark-icon dropdown-toggle-split no-pad-l no-pad-r" data-toggle="dropdown">
                <i class="flaticon-shapes font-xs" ></i>
              </a>
                <div class="dropdown-menu dropdown-menu-right " style="top:49px;">
                  <h5 class="dropdown-header font-m">Categories</h5>
                  <a class="dropdown-item" href="#">Cardiology</a>
                  <a class="dropdown-item" href="#">Endocrinology</a>
                  <a class="dropdown-item" href="#">Gastroenterology</a>
                  <a class="dropdown-item" href="#">Geriatrics</a>
                  <a class="dropdown-item" href="#">Hematology</a>
                  <a class="dropdown-item" href="#">Microbiology </a>
                  <a class="dropdown-item" href="#">neurology</a>
                  <a class="dropdown-item" href="#">Radiobiology</a>
                </div>

            </li>
            <li class="nav-item">
              <a class="navbar-brand dark-icon no-pad-l no-pad-r" href="#">
                <i class="flaticon-arrow font-xs"></i>
              </a>
            </li>
            <li class="nav-item btn-group">
              <a class="navbar-brand dark-icon dropdown-toggle-split no-pad-l no-pad-r" data-toggle="dropdown">
                <i class="flaticon-button-of-three-vertical-squares font-xs" ></i>
              </a>
                <div class="dropdown-menu dropdown-menu-right" style="top:49px;">
                  <a class="dropdown-item" href="#">Update Profile</a>
                  <a class="dropdown-item" href="#">Add Family Member</a>
                  <a class="dropdown-item" href="#">Clinical Record</a>
                  <a class="dropdown-item" href="#">Subscriptions</a>
                  <a class="dropdown-item" href="#">Privacy Policy</a>
                  <a class="dropdown-item" href="#">Terms and Conditions</a>
                  <a class="dropdown-item" href="#">Support</a>
                  <a class="dropdown-item" href="#">FAQs</a>
                  <a class="dropdown-item" href="#">Sign Out</a>
                </div>

            </li>
            <li class="nav-item active no-pad-l no-pad-r">
              <a class="nav-link" href="#" style="padding-left: 5px  !important;">SIGN IN</a>
            </li>
          </ul>
        </div>
      <!-- End of Links -->
    </div>
  </nav>
  <!-- End of Navigation Bar -->
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
      <div class="wide" id="container-vid" >
        <div class="container-fluid no-pad" style="display:flex;justify-content:center;">
          <div class="row" style="display:flex;justify-content: center;width: 100%;margin-top:20px !important;margin:0px;">
            <div class="col-12" style="display: flex;justify-content: center;">
              <div class="container-fluid">
                <div class="row" style="justify-content: center;">
                  <div style="width:848px;display: flex;justify-content: center;">
                    <video  id="vid1" width="848" height="477" controls controlsList="fullscreen nodownload noremoteplayback" poster="../res/img/icon.png" style="background:black;">
                      <source src="../res/videos/des.mp4"  type="video/mp4"  controlsList="nodownload" />
                         Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
                <div class="row" style="justify-content: center;">
                  <div  class="font-m" style="width:848px;display: flex;margin-top:10px;">
                    How to get Well Soon: Health Care
                  </div>
                </div>
                <div class="row" style="justify-content: center;">
                  <div  class="font-xs" style="width:848px;display: flex;margin-top:10px;color:#777">
                    <div class="row" style="justify-content: center;width:100%;line-height:32px;">
                      <div class="col-4" >
                        302,933 views
                      </div>
                      <div class="col-8" style="text-align:right;margin:0px;padding:0px;">
                        <div style="right: -20px;position: absolute;">
                          <span><i class="flaticon-thumb-up-button hover-icon" style="position:relative;left:10px;"></i>2k</span>
                          <span><i class="flaticon-hands hover-icon" style="position:relative;left:10px;"></i>362</span>
                          <span><i class="flaticon-share-connection-sing hover-icon" style="position:relative;left:10px;"></i></span>
                          <span><i class="flaticon-three-dots-more-indicator hover-icon" style="position:relative;left:10px;"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" style="justify-content: center;margin-top:15px;">
                  <div style="height:1px;width:848px;background:#ddd;"></div>
                </div>
                <div class="row" style="justify-content: center;margin-top:15px;">
                  <div style="width:848px;display: flex;">
                    <div class="col-8" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/doc.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;"><span class="font-m" style="line-height:1;color:#444">Dr. RK Singh</span><br><span class="font-xxs" style="line-height:0.9;color:#777">MBBS</span></div>
                      </div>
                    </div>
                    <div class="col-4" style="text-align:right;line-height: 50px;">
                      <i class="flaticon-speech-bubble-with-text-lines font-m" style="line-height:50px;color: #5ea12c;"></i>
                      <button type="button" class="btn subscribe" style="margin-top:-10px;">Subscribe</button>
                    </div>
                  </div>
                </div>
                <div class="row" style="justify-content: center;margin-top:15px;">
                  <div style="width:848px;display: flex;">
                    <div class="col-12" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div style="padding: 0px 10px 0px 10px;"><span class="font-xs" style="line-height:1;color:#444"><strong>Published on : </strong>12 Jan 2017</span><br><span class="font-xs" style="line-height:1;color:#444"><strong>Catagory : </strong>Medicine</span><br></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" style="justify-content: center;margin-top:15px;">
                  <div style="width:848px;display: flex;">
                    <div class="col-12" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div style="padding: 0px 10px 0px 10px;">
                          <span class="font-xs" style="line-height:1;color:#444">
                            <p>When you're not feeling well, all you can think about is how to feel better fast. It's helpful to already have a strategy and supplies on hand, so when sickness strikes you'll know what to do. You'll need nourishing food, plenty of hydrating fluids, some medications or herbal remedies, and distractions to keep boredom at bay. Whether you're injured or ill, knowing how to take care of yourself can help put you on the road to a fast recovery.</p>
                          </span>
                          <br>
                          <span class="read_more" >READ MORE</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row" style="justify-content: center;margin-top:15px;">
                  <div style="width:848px;display: flex;">
                    <div class="col-12" style="padding: 0px;">
                      <div style="height:41px;display: flex;line-height: 1 !important;border-bottom: 2px solid rgba(86, 86, 86, 0.7);">
                        <div style="padding: 10px;border-bottom: 5px solid #5ea12c;position:absolute;">
                          <span class="read_more" ><strong>1740 Comments</strong></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" style="justify-content: center;">
                  <div  class="font-xs" style="width:848px;display: flex;margin-top:10px;color:#777">
                    <div class="row" style="justify-content: center;width:100%;line-height:32px;">
                      <div class="col-4" style="color:#aaa" >
                        <strong>Recomended</strong>
                      </div>
                      <div class="col-8" style="text-align:right;margin:0px;padding:0px;">
                        <div style="right: -20px;position: absolute;color:#aaa;">
                          <div class="dropdown">
                            <span  class="dropdown-toggle" data-toggle="dropdown">
                              <strong>Sort by</strong>
                            </span>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Most Recent</a>
                              <a class="dropdown-item" href="#">Top Comments</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" style="justify-content: center;margin-top:15px;">
                  <div style="width:848px;display: flex;">
                    <div class="col-12" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/pro.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;width: 100%;">
                          <input class="comment" type="text" name="comment" placeholder="Leave a comment ...">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Comments -->
                <!-- Comment 1 -->
                <div class="row " style="justify-content: center;margin-top:30px;">
                  <div class="comments" style="width:848px;display: flex;">
                    <div class="col-10" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/pro3.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;">
                          <span class="font-xs" style="line-height:1;color:#444"><strong>Sunny</strong></span>
                          <span class="font-xxs" style="line-height:0.9;color:#777;margin-left:20px">2 months ago</span>
                          <span class="font-xs" style="color:#333;">
                            <p style="margin-top:10px;">This method is not as effective
                            </p>
                          </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-thumb-up-button font-xs hover-icon" style="margin:0px;"></i> 8 |</span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-hands font-xs hover-icon" style="margin:0px;"></i> 2 <b>&#183;</b> </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;">Reply</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-2" style="text-align:right;">
                      <div class="comment-setting"><i class="flaticon-button-of-three-vertical-squares font-xs" style="margin:0px;"></i></div>
                    </div>
                  </div>
                </div>
                <!-- End of Comment 1 -->
                <!-- Comment 2 -->
                <div class="row " style="justify-content: center;margin-top:30px;">
                  <div class="comments" style="width:848px;display: flex;">
                    <div class="col-10" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/pro1.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;">
                          <span class="font-xs" style="line-height:1;color:#444"><strong>Shivam</strong></span>
                          <span class="font-xxs" style="line-height:0.9;color:#777;margin-left:20px">2 months ago</span>
                          <span class="font-xs" style="color:#333;">
                            <p style="margin-top:10px;">This method is not as effective for children younger than five. Often they are too young to know how to properly gargle
                            </p>
                          </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-thumb-up-button font-xs hover-icon" style="margin:0px;"></i> 5 |</span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-hands font-xs hover-icon" style="margin:0px;"></i> 2 <b>&#183;</b> </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;">Reply</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-2" style="text-align:right;">
                      <div class="comment-setting"><i class="flaticon-button-of-three-vertical-squares font-xs" style="margin:0px;"></i></div>
                    </div>
                  </div>
                </div>
                <!-- End of Comment 2 -->
                <!-- Comment 2 reply -->
                <div class="row " style="justify-content: center;margin-top:30px;">
                  <div class="comments comment-reply" style="width:848px;display: flex;">
                    <div class="col-10" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/pro2.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;">
                          <span class="font-xs" style="line-height:1;color:#444"><strong>Tarun</strong></span>
                          <span class="font-xxs" style="line-height:0.9;color:#777;margin-left:20px">2 months ago</span>
                          <span class="font-xs" style="color:#333;">
                            <p style="margin-top:10px;">This method is not as effective for children younger than five.                           </p>
                          </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-thumb-up-button font-xs hover-icon" style="margin:0px;"></i> 13 |</span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-hands font-xs hover-icon" style="margin:0px;"></i> 0 <b>&#183;</b> </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;">Reply</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-2" style="text-align:right;">
                      <div class="comment-setting"><i class="flaticon-button-of-three-vertical-squares font-xs" style="margin:0px;"></i></div>
                    </div>
                  </div>
                </div>
                <!-- End of Comment  2 reply -->
                <!-- Comment  2 reply -->
                <div class="row " style="justify-content: center;margin-top:30px;">
                  <div class="comments comment-reply" style="width:848px;display: flex;">
                    <div class="col-10" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/pro3.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;">
                          <span class="font-xs" style="line-height:1;color:#444"><strong>Sunny</strong></span>
                          <span class="font-xxs" style="line-height:0.9;color:#777;margin-left:20px">2 months ago</span>
                          <span class="font-xs" style="color:#333;">
                            <p style="margin-top:10px;">Often they are too young to know how to properly gargle
                            </p>
                          </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-thumb-up-button font-xs hover-icon" style="margin:0px;"></i> 1 |</span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-hands font-xs hover-icon" style="margin:0px;"></i> 0 <b>&#183;</b> </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;">Reply</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-2" style="text-align:right;">
                      <div class="comment-setting"><i class="flaticon-button-of-three-vertical-squares font-xs" style="margin:0px;"></i></div>
                    </div>
                  </div>
                </div>
                <!-- End of Comment  2 reply -->
                <!-- Comment  2 reply -->
                <div class="row " style="justify-content: center;margin-top:30px;">
                  <div class="comments comment-reply" style="width:848px;display: flex;">
                    <div class="col-10" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/pro1.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;">
                          <span class="font-xs" style="line-height:1;color:#444"><strong>Shivam</strong></span>
                          <span class="font-xxs" style="line-height:0.9;color:#777;margin-left:20px">2 months ago</span>
                          <span class="font-xs" style="color:#333;">
                            <p style="margin-top:10px;">We employ strict cheating prevention techniques. The test window will be proctored and candidates will be warned once if they switch to some other window (chat, google search etc). Suspicious candidates will be disqualified from the contest.This method is not as effective for children younger than five. Often they are too young to know how to properly gargle
                            </p>
                          </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-thumb-up-button font-xs hover-icon" style="margin:0px;"></i> 0 |</span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-hands font-xs hover-icon" style="margin:0px;"></i> 0 <b>&#183;</b> </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;">Reply</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-2" style="text-align:right;">
                      <div class="comment-setting"><i class="flaticon-button-of-three-vertical-squares font-xs" style="margin:0px;"></i></div>
                    </div>
                  </div>
                </div>
                <!-- End of Comment 2 reply -->
                <!-- Comment 3 -->
                <div class="row " style="justify-content: center;margin-top:30px;">
                  <div class="comments" style="width:848px;display: flex;">
                    <div class="col-10" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/pro2.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;">
                          <span class="font-xs" style="line-height:1;color:#444"><strong>Tarun</strong></span>
                          <span class="font-xxs" style="line-height:0.9;color:#777;margin-left:20px">1 months ago</span>
                          <span class="font-xs" style="color:#333;">
                            <p style="margin-top:10px;">for children younger than five. Often they are too young to know how to properly gargle
                            </p>
                          </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-thumb-up-button font-xs hover-icon" style="margin:0px;"></i> 6 |</span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-hands font-xs hover-icon" style="margin:0px;"></i> 2 <b>&#183;</b> </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;">Reply</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-2" style="text-align:right;">
                      <div class="comment-setting"><i class="flaticon-button-of-three-vertical-squares font-xs" style="margin:0px;"></i></div>
                    </div>
                  </div>
                </div>
                <!-- End of Comment 3 -->
                <!-- Comment 3 reply -->
                <div class="row " style="justify-content: center;margin-top:30px;">
                  <div class="comments comment-reply" style="width:848px;display: flex;padding-left: 50px;">
                    <div class="col-10" style="padding: 0px;">
                      <div style="display: flex;line-height: 1 !important;">
                        <div class="pro-info"><img src="../res/img/pro3.jpg" style="width: 50px;height: 50px;"></div>
                        <div style="padding: 0px 10px 0px 10px;">
                          <span class="font-xs" style="line-height:1;color:#444"><strong>Sunny</strong></span>
                          <span class="font-xxs" style="line-height:0.9;color:#777;margin-left:20px">2 hours ago</span>
                          <span class="font-xs" style="color:#333;">
                            <p style="margin-top:10px;">younger than five are often they are too young to know how to properly gargle
                            </p>
                          </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-thumb-up-button font-xs hover-icon" style="margin:0px;"></i> 0 |</span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;"><i class="flaticon-hands font-xs hover-icon" style="margin:0px;"></i> 0 <b>&#183;</b> </span>
                          <span class="font-xs " style="line-height:0.9;color:#777;margin-right:4px;">Reply</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-2" style="text-align:right;">
                      <div class="comment-setting"><i class="flaticon-button-of-three-vertical-squares font-xs" style="margin:0px;"></i></div>
                    </div>
                  </div>
                </div>
                <!-- End of Comment 3 reply -->
                <div class="row" style="justify-content: center;margin-top:15px;">
                  <div style="height:1px;width:848px;background:#ddd;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

       <!-- Script For Video Player -->
       <script type="text/javascript">
       function goFullscreen(id) {
        var element = document.getElementById(id);
        if (element.mozRequestFullScreen) {
          element.mozRequestFullScreen();
        } else if (element.webkitRequestFullScreen) {
          element.webkitRequestFullScreen();
        }
      }
      var pause = 0;
     document.getElementById('vid1').addEventListener('loadedmetadata', function() {
     this.currentTime = 5;
     this.play();
     }, false);

     document.getElementById('vid1').addEventListener('click', function() {
       this.currentTime = 5;
       if(pause == 0){
         this.pause();
         pause = 1;
       }
       else{
         this.play();
         pause = 0;
       }
    }, false);

        function myKeyPress(e){
             var keynum;
             if(window.event) { // IE
               keynum = e.keyCode;
             } else if(e.which){ // Netscape/Firefox/Opera
               keynum = e.which;
             }
             var obj = document.getElementById('vid1');
             if(keynum == 32){
               if(pause == 0){
                 obj.pause();
                 pause = 1;
             }
             else{
               obj.play();
               pause = 0;
             }
            }
          }
       </script>
       <!-- Script For Video Player -->
      </div>
    </div>
  </div>
  <!-- End of Main Body -->
  </body>
</html>
