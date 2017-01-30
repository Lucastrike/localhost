<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><h1><img src="images/castdedeLogo1.png" alt="" /></h1></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
  <div class="top-search">
    <form class="navbar-form navbar-right">
      <input type="text" class="form-control" placeholder="Search...">
      <input type="submit" value=" ">
    </form>
  </div>
  <div class="header-top-right">
    <div class="file hidden" id="logout">
      <a href="upload.html">Logout</a>
    </div>
    <div class="signin">
      <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Sign Up</a>
      <!-- pop-up-box -->
              <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
              <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
              <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
              <!--//pop-up-box -->
              <!--<div id="small-dialog2" class="mfp-hide">
                <h3>Create Account</h3>
                <div class="social-sits">
                  <div class="facebook-button">
                    <a href="#">Connect with Facebook</a>
                  </div>
                  <div class="chrome-button">
                    <a href="#">Connect with Google</a>
                  </div>
                  <div class="button-bottom">
                    <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                  </div>
                </div>
                <div class="signup">
                  <form>
                    <input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
                  </form>
                  <div class="continue-button">
                    <a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">CONTINUE</a>
                  </div>
                </div>
                <div class="clearfix"> </div>
              </div>-->
              <div id="small-dialog2" class="mfp-hide">
                <h3>Create Account</h3>
                <div class="social-sits">
                  <div class="facebook-button">
                    <a href="#">Connect with Facebook</a>
                  </div>
                  <div class="chrome-button">
                    <a href="#">Connect with Google</a>
                  </div>
                  <div class="button-bottom">
                    <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                  </div>
                </div>
                <div class="signup">
                  <form id="form-singup">
                    <input id="nameup" type="text" class="username" placeholder="Name" name="name"/>
                    <input id="emailup" type="text" class="email" placeholder="Email" name="email"/>
                    <input id="passwordup" type="password" placeholder="Password" name="password"/>
                    <input id="repasswordup" type="password" placeholder="Confirm password" name="repasswordup"/>
                    <br>
                    <!--<input id="nameup" type="text" class="email" placeholder="Name" required="required"/>
                    <input id="emailup" type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                    <input id="passwordup" type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />-->
                    <!--<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />-->
                    <input type="submit"  value="Sign Up"/>
                  </form>
                  <style media="screen">
                  form .error {
                    color: #ff0000;
                  }
                  </style>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div id="small-dialog7" class="mfp-hide">
                <h3>Create Account</h3>
                <div class="social-sits">
                  <div class="facebook-button">
                    <a href="#">Connect with Facebook</a>
                  </div>
                  <div class="chrome-button">
                    <a href="#">Connect with Google</a>
                  </div>
                  <div class="button-bottom">
                    <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                  </div>
                </div>
                <div class="signup">
                  <form action="upload.html">
                    <input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                    <input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
                    <input type="submit"  value="Sign In"/>
                  </form>
                </div>
                <div class="clearfix"> </div>
              </div>
              <script>
                  $(document).ready(function() {
                  $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                  });

                  });
              </script>
    </div>
    <div class="signin">
      <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a>
      <div id="small-dialog" class="mfp-hide">
        <h3>Login</h3>
        <div class="social-sits">
          <div class="facebook-button">
            <a href="#">Connect with Facebook</a>
          </div>
          <div class="chrome-button">
            <a href="#">Connect with Google</a>
          </div>
          <div class="button-bottom">
            <p>New account? <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Signup</a></p>
          </div>
        </div>
        <div class="signup">
          <form id="form-singin">
            <input id="emailin" type="text" class="email" name="email" placeholder="Enter email"/>
            <input id="passwordin" type="password" name="password" placeholder="Password"/>
            <br>
            <input type="submit"  value="LOGIN"/>
          </form>
          <div class="forgot">
            <a href="#">Forgot password ?</a>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
    </div>
<div class="clearfix"> </div>
  </div>
</nav>
