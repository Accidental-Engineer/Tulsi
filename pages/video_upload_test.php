<?php
//session_start();

include "../lib/lib.php";
require '../pdo/classes/Database.php';
$database = new Database;
if (isset($_POST['submit'])) {

  if (isset($_FILES['file'])) {
      $vid =array("mp4", "3gp", "mov", "avi", "mwv", "mpeg", "mpg", "flv", "ogg" ,"vob" ,"mkv","webm", "mpv", "m4p","webm");
      $location = "../res/videos/";
      $name = $_FILES['file']['name'];
      $size = $_FILES['file']['size'];
      $type = $_FILES['file']['type'];
      $extension = strtolower(substr($name , strrpos($name, '.') + 1));
      $temp_name = $_FILES['file']['tmp_name'];
      $name = genVidName();
      $vid_config = array('location' => $temp_name,'save_loaction' => $location.$name.'.mp4','quality' => 'low' ,'name' =>$name.'.jpg' );
      if(in_array($extension, $vid)){
        encodeVideo($vid_config);
      }
      else {
        echo "failed" ;
      }
    }
}

 ?>

<!DOCTYPE html>
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
      <script src="../js/popper.min.js"></script>
      <script src="../js/jquery.form.js"></script>
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
          console.log($(".vid-slide"));
          var vid_body = $(".vid").width()+30;
          var max_vid_width = $(".vid-slide").width();
          console.log(vid_body);
          console.log(max_vid_width);
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
        console.log(vid_body);
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
  <body>
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
        <div class="wide" id="container-vid" style="overflow: hidden;">
          <!-- Progress Bar -->
          <div class="progress" style="opacity:0;text-align:center;color:#ccc;">
          	<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;background:#ff9d17;">
              <div class="progressSpeed">
                0KB/s
              </div>
  				  </div>
  				</div>
          <!-- End of Progress Bar -->
          <form id="myForm" method="post" enctype="multipart/form-data" >
            <input type="file" name="file"><br>
            <input type="submit" name="submit" value="Send">
          </form>
          <div id="responce">

          </div>
        </div>
      </div>
    </div>
<!-- End of Main Body -->
    <script type="text/javascript">
      var progress;
      var progressbar;
      var progressSpeed;
      var send;
      var d;
      var oldTime;
      var oldpercentComplete;
      var c;

         $("#myForm").ajaxForm(
           {
            type : "POST",
            beforeSend: function() {
              progress = $(".progress");
              progressbar     = $('.progress-bar');
              progressSpeed     = $('.progressSpeed');
              send = 0;
              d = new Date();
              oldTime = d.getTime();
              oldpercentComplete =0;
              c = 0;
              progress.css("opacity","1");
              progressSpeed.css("color","#555");
              progressbar.css("background-color","#ff9d17");
              progressbar.width('0%');
              progressSpeed.text('0%');
            },
            // target : $('#responce'),
            uploadProgress: function (event, position, total, percentComplete) {
              progressSpeed.text(percentComplete + '%');
              if (percentComplete > oldpercentComplete){
                progressbar.width(percentComplete + '%');
                oldpercentComplete = percentComplete;
               }
             },
             resetForm :true,
             forceSync :true,
             url : 'video_upload_test.php',
             success:function(responseText) {
            //  console.log(responseText);
            }
          });
          var progress = $(".progress");
          var progressbar     = $('.progress-bar');
          var progressSpeed     = $('.progressSpeed');
          setInterval(function(){
            $.ajax({
              url : "processing_update.php",
              type : "POST",
              success : function(result){
                var data = JSON.parse(result);
                console.log(data.progress);
                if (data.progress > 0) {
                  if(data.progress <= 99){
                    progressSpeed.text('Processing video '+(data.progress+1)+"%");
                  }
                  else{
                    progressSpeed.text('Processing video '+data.progress+"%");
                  }
                  progress.css("background","#ff9d17");
                  progressbar.width(data.progress + '%');
                  progressbar.css("background-image","linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)");
                  progressbar.css("background-color","#428bca");
                  progressbar.css("color","#fff");
                }
              }
            });
          },1000);
      </script>
  </body>
</html>
