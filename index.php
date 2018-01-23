<!DOCTYPE html>
<html>
  <head>
    <!-- CSS -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End of CSS -->

    <!-- Icon -->
      <link rel="icon" href="./res/img/icon.png">
    <!-- End of Icon -->

    <!-- Title -->
      <title>Tulsi Care</title>
    <!-- End of Title -->

    <!-- CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="./res/font/icon/flaticon.css">
    <!-- End of CSS -->

    <!-- JavaScript -->
      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- End of JavaScript -->

    <!-- Color theme -->
      <link rel="stylesheet" href="./css/style.css">
    <!-- End of Color Theme -->
    <!-- Script -->
    <script>
      $(document).ready(function(){
          $("#menu").click(function(){
            $("#side-menu").fadeToggle(0);
            $("#container-vid").toggleClass("wide");
            $("#container-vid").toggleClass("srink");
            var c_vid_width =  $("#container-vid").width();
            console.log(c_vid_width);
            if(c_vid_width >= 1200){
              console.log("1");
              $(".vid").css("max-width","1105px");
              $(".separator").css("width","1082px");
            }
            if(c_vid_width < 1200){
              console.log("2");
              $(".vid").css("max-width","887px");
              $(".separator").css("width","864px");
            }
            if (c_vid_width < 992) {
              console.log("3");
              $(".vid").css("max-width","669px");
              $(".separator").css("width","646px");
            }
            if (c_vid_width < 768) {
              console.log("4");
              $(".vid").css("max-width","451px");
              $(".separator").css("width","428px");
            }

          });
      });
    </script>
    <!-- End of Script-->
  </head>
  <body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top" style="box-shadow: 0 0 8px rgba(0,0,0,0.5);">
    <div class="container-fluid">
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
              <img src="./res/img/icon.png" alt="Logo" style="width:1.8em;margin-left:1em;">
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
                <button class="input-group-addon" type="submit" style="cursor:pointer;"> <i class="flaticon-search font-xxs" style="margin-left:-20px; color:#777;"></i></button>
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
                <div class="dropdown-menu dropdown-menu-right">
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
                <div class="dropdown-menu dropdown-menu-right">
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
      <div class="hide" id="side-menu" style="width:240px;z-index: 1;box-shadow: 0px 6px 12px rgba(0,50,0,0.5);">
        FD,SDS.
      </div>
      <div class="wide" id="container-vid">
        <!-- Videos Row 1-->
        <div class="container vid-row" style="margin-top: 20px;" >
          <div class="row" style="padding-left: 19px;padding-right: 19px;float:right;">
            <div class="col-12 font-m" style="display:inline;">
              Recommended
            </div>
          </div>
          <div class="row" style="display: inline;float: right; margin:15px;">
            <div class="col-12 vid" style="display: flex;overflow-x: hidden;" >
              <div class="" style="display: flex;">
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
              </div>
            </div>
          </div>
          <div class="row separator" style="float: right;margin-right: 19px;">
            <div class="col-12" style="border-top: 1px solid rgba(170,170,170,0.3);">

            </div>
          </div>
        </div>
        <!-- End of Videos Row 1-->
        <!-- Videos Row 2-->
        <div class="container vid-row" style="margin-top: 20px;" >
          <div class="row" style="padding-left: 19px;padding-right: 19px;float:right;">
            <div class="col-12 font-m" style="display:inline;">
              Recommended
            </div>
          </div>
          <div class="row" style="display: inline;float: right; margin:15px;">
            <div class="col-12 vid" style="display: flex;overflow-x: hidden;" >
              <div class="" style="display: flex;">
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
              </div>
            </div>
          </div>
          <div class="row separator" style="float: right;margin-right: 19px;">
            <div class="col-12" style="border-top: 1px solid rgba(170,170,170,0.3);">

            </div>
          </div>
        </div>
        <!-- End of Videos Row 2-->
        <!-- Videos Row 3-->
        <div class="container vid-row" style="margin-top: 20px;" >
          <div class="row" style="padding-left: 19px;padding-right: 19px;float:right;">
            <div class="col-12 font-m" style="display:inline;">
              Recommended
            </div>
          </div>
          <div class="row" style="display: inline;float: right; margin:15px;">
            <div class="col-12 vid" style="display: flex;overflow-x: hidden;" >
              <div class="" style="display: flex;">
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
              </div>
            </div>
          </div>
          <div class="row separator" style="float: right;margin-right: 19px;">
            <div class="col-12" style="border-top: 1px solid rgba(170,170,170,0.3);">

            </div>
          </div>
        </div>
        <!-- End of Videos Row 3-->
        <!-- Videos Row 4-->
        <div class="container vid-row" style="margin-top: 20px;" >
          <div class="row" style="padding-left: 19px;padding-right: 19px;float:right;">
            <div class="col-12 font-m" style="display:inline;">
              Recommended
            </div>
          </div>
          <div class="row" style="display: inline;float: right; margin:15px;">
            <div class="col-12 vid" style="display: flex;overflow-x: hidden;" >
              <div class="" style="display: flex;">
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
              </div>
            </div>
          </div>
          <div class="row separator" style="float: right;margin-right: 19px;">
            <div class="col-12" style="border-top: 1px solid rgba(170,170,170,0.3);">

            </div>
          </div>
        </div>
        <!-- End of Videos Row 4-->
        <!-- Videos Row 5-->
        <div class="container vid-row" style="margin-top: 20px;" >
          <div class="row" style="padding-left: 19px;padding-right: 19px;float:right;">
            <div class="col-12 font-m" style="display:inline;">
              Recommended
            </div>
          </div>
          <div class="row" style="display: inline;float: right; margin:15px;">
            <div class="col-12 vid" style="display: flex;overflow-x: hidden;" >
              <div class="" style="display: flex;">
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
                <div class="vid-card">

                </div>
              </div>
            </div>
          </div>
          <div class="row separator" style="float: right;margin-right: 19px;">
            <div class="col-12" style="border-top: 1px solid rgba(170,170,170,0.3);">

            </div>
          </div>
        </div>
        <!-- End of Videos Row 5-->
      </div>
    </div>
  </div>
  <!-- End of Main Body -->
  </body>
</html>
