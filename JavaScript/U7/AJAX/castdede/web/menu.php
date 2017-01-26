<!---start-wrap---->
  <!---start-header---->
  <div class="header">
    <div class="wrap">
    <!---start-logo---->
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" title="logo" /></a>
    </div>
    <!---End-logo---->
    <!---start-top-menu-search---->
    <div class="top-menu">
      <div class="top-nav">
        <ul>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="categories.php">Categories</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.html" id="login">Login</a></li>
        </ul>
      </div>
      <div class="search">
        <form>
          <input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
          <input type="submit" value=" " />
        </form>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <!---End-top-menu-search---->
  </div>
  <!---End-header---->
</div>
<div class="clear"></div>

<!--Modal-->
<div class="content modal" id="login-form">
  <div class="top-grids">
    <div class="top-grids-left">
      <div class="signin-form-grid">
        <div class="signin-form">
          <h2>Sign In Form</h2>
          <form id="signin" action="#" method="post">
            <input type="text" name="User Name" placeholder="User Name" required="">
            <input type="password" name="Password" placeholder="Password" required="">
            <input type="checkbox" id="brand" value="">
            <label for="brand"><span></span> Remember me ?</label>
            <input type="submit" value="SIGN IN">
            <div class="signin-agileits-bottom">
              <p><a href="#">Forgot Password ?</a></p>
            </div>
          </form>
        </div>
        <div class="signin-firm">
          <div class="social-grids">
            <div class="social-text">
              <p>Or Sign in with</p>
            </div>
            <div class="social-icons1">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
            <div class="clear"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End-modal-->
