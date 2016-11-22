
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Zapashion</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

        <link rel="stylesheet" href="css/style.css">
        <style media="screen">
          .g-recaptcha > div {
            margin: auto;
            margin-bottom: 10px;
            margin-top: -10px;
          }
        </style>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>
        <div class="form">

            <ul class="tab-group">
                <li class="tab active">
                    <a href="#signup">Sign Up</a>
                </li>
                <li class="tab">
                    <a href="#login">Log In</a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="signup">

                    <form action="insert.php" method="post" id="formSingUp">
                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    First Name<span class="req">*</span>
                                </label>
                                <input type="text" autocomplete="off" name="firstName"/>
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Last Name<span class="req">*</span>
                                </label>
                                <input type="text" autocomplete="off" name="lastName"/>
                            </div>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" autocomplete="off" name="email"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Set A Password<span class="req">*</span>
                            </label>
                            <input type="password" autocomplete="off" name="password" id="pass"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Confirm Password<span class="req">*</span>
                            </label>
                            <input type="password" autocomplete="off" name="rePassword"/>
                        </div>

                        <div class="g-recaptcha pull-right" data-sitekey="6LcQnwwUAAAAANQKmyvNQyz1aJicJkkLxgMym-ke"></div>

                        <button class="button button-block"/>Get Started</button>
                </form>
            </div>

            <div id="login">
                <h1>Welcome Back!</h1>
                <form action="checkLogin.php" method="post" id="formSingIn">
                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" autocomplete="off" name="email"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" autocomplete="off" name="password"/>
                    </div>
                    <p class="forgot">
                        <a href="#">Forgot Password?</a>
                    </p>
                    <button class="button button-block"/>Log In</button>
            </form>

        </div>
    </div>
    <!-- tab-content -->
</div>
<!-- /form -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#formSingUp").validate({
            rules: {
                firstName: "required",
                lastName: "required",
                email: "required",
                password: "required",
                rePassword: {
                  required: true,
                  equalTo: '#pass'
                }
            }
        });

        $("#formSingIn").validate({
            rules: {
                email: "required",
                password: "required"
            }
        });
    });
</script>

</body>
</html>
