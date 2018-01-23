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
      <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
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
            $("#container-vid").toggleClass("wide");
            $("#container-vid").toggleClass("srink");
            $("#side-menu").toggleClass("hide");
          });

      });
    </script>
    <!-- End of Script-->
    <style>
        /* centered columns styles */
        .row-centered {
            text-align:center;
        }
        .col-centered {
            display:inline-block;
            float:none;
            /* reset the text-align */
            text-align:left;
            /* inline-block space fix */
            margin-right:-4px;
        }

        .input-bottom-bordered{
          border: none;
          border-bottom: 1px solid black;
          background: none;
          padding: 5px;
          margin-top: 35px;
          height: 50px;
        }
        /*input[type="text"]:focus::-webkit-input-placeholder {
          color: white;
        }*/

        #login-form{
        height: 132px;
        width: 270px;
        padding: 15px;
        }
        .sign-in-btn{
          margin-top: 15px;
        }
        .sign-in-btn{
          cursor: pointer;
          height: 36px;
          width: 240px;
          box-sizing: border-box;
          box-shadow: 0 0 2px gray;
          line-height: 36px;
          font-size: 13px;
          color: white;
        }
        .login-btn-icon{
          height: 34px;
          width: 34px;
          background: white;
          float: left;
          margin: 1px;
          padding: 4px;
          box-sizing: border-box;
         }
         .btn-text{
           font-family: Roboto,arial,sans-serif;
           width: calc(100% - 40px);
           text-align: center;
         }
         #fb-sign-in{
            background: #3b5998;
         }
         #google-sign-in{
           background: #4285f4;
         }


         #contact {
           margin-top: 35px;
           padding-right: 0 !important;
           padding-left: 20px !important;
         }
         #contact .slider-masks {
           background-color: rgba(129, 129, 129, 0.7);
           height: 100%;
           left: 0;
           position: absolute;
           top: 0;
           width: 100%;
         }
         #contact .group {
           position: relative;
           margin-bottom: 30px;
           min-width: 100%;
         }
         #contact input,
         #contact textarea {
           font-size: 13px;
           padding: 10px 10px 10px 5px;
           display: block;
           width: 100%;
           border: none;
           border-bottom: 1px solid #2b2b2b;
           background: transparent;
           color: #969696;
           font-size: 13px;
         }
         #contact input:focus,
         #contact textarea:focus {
           outline: none;
           border-bottom: none;
         }
         #contact label {
           color: #2b2b2b;
           font-size: 14px;
           font-weight: normal;
           position: absolute;
           pointer-events: none;
           left: 5px;
           top: 10px;
           transition: 0.2s ease all;
           -moz-transition: 0.2s ease all;
           -webkit-transition: 0.2s ease all;
         }
         #contact input:focus ~ label,
         #contact input:valid ~ label,
         #contact textarea:focus ~ label,
         #contact textarea:valid ~ label {
           top: -25px;
           font-size: 12px;
           color: #818181;
         }
         #contact .bar {
           position: relative;
           display: block;
           width: 100%;
         }
         #contact .bar:before,
         #contact .bar:after {
           content: '';
           height: 2px;
           width: 0;
           bottom: 1px;
           position: absolute;
           background: #818181;
           transition: 0.2s ease all;
           -moz-transition: 0.2s ease all;
           -webkit-transition: 0.2s ease all;
         }
         #contact .bar:before {
           left: 50%;
         }
         #contact .bar:after {
           right: 50%;
         }
         #contact input:focus ~ .bar:before,
         #contact input:focus ~ .bar:after,
         #contact textarea:focus ~ .bar:after,
         #contact textarea:focus ~ .bar:before {
           width: 50%;
         }
         #contact .highlight {
           position: absolute;
           height: 60%;
           width: 100%;
           top: 25%;
           left: 0;
           pointer-events: none;
           opacity: 0.5;
         }
         #contact input:focus ~ .highlight,
         #contact textarea:focus ~ .highlight {
           -webkit-animation: inputHighlighter 0.3s ease;
           -moz-animation: inputHighlighter 0.3s ease;
           animation: inputHighlighter 0.3s ease;
         }
         #contact input[type=submit] {
           border: 1px solid #2b2b2b !important;
           color: #2b2b2b;
           padding: 10px;
           font-weight: 700;
           letter-spacing: 0.9px;
           text-transform: uppercase;
           transition: 0.2s ease all;
           -moz-transition: 0.2s ease all;
           -webkit-transition: 0.2s ease all;
         }
         #contact input[type=submit]:hover {
           background: #2b2b2b;
           color: #ffffff;
         }
         @-webkit-keyframes inputHighlighter {
           from {
             background: #5264AE;
           }
           to {
             width: 0;
             background: transparent;
           }
         }
         @-moz-keyframes inputHighlighter {
           from {
             background: #818181;
           }
           to {
             width: 0;
             background: transparent;
           }
         }
         @keyframes inputHighlighter {
           from {
             background: #818181;
           }
           to {
             width: 0;
             background: transparent;
           }
         }


    </style>
  </head>
  <body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top" style="box-shadow: 0 0 8px rgba(0,0,0,0.5);">
    <div class="container-fluid">
      <div class="col-md-8 col-5">
        <ul class="navbar-nav" style="flex-direction: row;">
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
        </ul>
      </div>
      <!-- Links -->
        <div class="col-md-4 col-7" style="padding: 0px;">
          <ul class="navbar-nav " id="links" style="float:right; flex-direction: row;" >
            <li class="nav-item">
              <a class="navbar-brand dark-icon no-pad-l no-pad-r" href="#">
                <i class="flaticon-button-of-three-vertical-squares font-xs" ></i>
              </a>
            </li>

          </ul>
        </div>
      <!-- End of Links -->
    </div>
  </nav>
  <!-- End of Navigation Bar -->

  <!-- Main Body -->
  <div class="container-fluid row-centered" style="height: calc(100vh - 62px); margin: 0;">
    <div class = "row col-md-6 col-sm-12 col-centered container-fluid" style = "margin-top: 10px; box-shadow: 0 0 5px gray; padding: 25px;">
      <button class = "btn btn-primary col-md-6 active">Sign In</button><button class = "btn btn-info col-md-6 disabled">Sign Up</button>
      <!--<span class = "col-md-12" style = 'text-align: left;'></span>-->
      <div class = "row col-md-12 container-fluid" id = "contact">

          <div class="group">
            <input required="" type="text"><span class="highlight"></span><span class="bar"></span><label>Name</label>
          </div>
          <div class="group">
            <input required="" type="email"><span class="highlight"></span><span class="bar"></span><label>Email</label>
          </div>
          <input id="sendMessage" name="sendMessage" type="submit" value="Login">

      </div>

      <center><div id = "login-form" class = 'row col-md-12'>
         <center><div id="google-sign-in" class="sign-in-btn"><div class = "login-btn-icon" style = "margin-right: 25px;">

           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
             <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                                            c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                                            C103.821,274.792,107.225,292.797,113.47,309.408z"/>
             <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                                            c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                                            c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
             <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                                            c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                                            c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
             <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                                            c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                                            C318.115,0,375.068,22.126,419.404,58.936z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
             <g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

           </div><div class = "btn-text">Continue with Google</div></div></center><center>
        <div class = "sign-in-btn" id = "fb-sign-in" onclick = "login();"><div class = "login-btn-icon" style = "margin-right: 25px;">


          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#385C8E;" d="M134.941,272.691h56.123v231.051c0,4.562,3.696,8.258,8.258,8.258h95.159
            c4.562,0,8.258-3.696,8.258-8.258V273.78h64.519c4.195,0,7.725-3.148,8.204-7.315l9.799-85.061c0.269-2.34-0.472-4.684-2.038-6.44
            c-1.567-1.757-3.81-2.763-6.164-2.763h-74.316V118.88c0-16.073,8.654-24.224,25.726-24.224c2.433,0,48.59,0,48.59,0
            c4.562,0,8.258-3.698,8.258-8.258V8.319c0-4.562-3.696-8.258-8.258-8.258h-66.965C309.622,0.038,308.573,0,307.027,0
            c-11.619,0-52.006,2.281-83.909,31.63c-35.348,32.524-30.434,71.465-29.26,78.217v62.352h-58.918c-4.562,0-8.258,3.696-8.258,8.258
            v83.975C126.683,268.993,130.379,272.691,134.941,272.691z"/>
            <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>


          </div><div class = "btn-text">Continue with Facebook</div></div></center>
      </div>
    </center>
    </div>
  </div>
  <!-- End of Main Body -->
  </body>
</html>
