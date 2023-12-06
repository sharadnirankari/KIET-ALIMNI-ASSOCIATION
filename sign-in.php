<!doctype html>
<html>


<head>
  <meta charset="utf-8">
  <title>KAA Sign-In</title>
  <link href="assets/public/css/style.css" rel="stylesheet" type="text/css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1.0, user-scalable=no">
  <link href="https://www.kiet.edu/assets/frontend/img/favicon-logo.jpg" rel="shortcut icon">
  <meta name="google-site-verification" content="mHqKbfWjehQLfW-dh-K707VdE9SEIXKte_7BZ20gxwQ" />
  <link href="assets/public/css/fontawesome-all.css" rel="stylesheet" type="text/css">
  <link href="assets/public/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/public/css/jquery.magnify.css" rel="stylesheet" type="text/css">
  <link href="assets/public/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
  <script src="assets/public/script/1.7.2.jquery.min.js" type="text/javascript"></script>
  <script src="assets/public/script/jquery.easing.1.3.js" type="text/javascript"></script>
  <script src="assets/public/script/jquery.magnify.js" type="text/javascript"></script>
  <script src="assets/public/script/jquery.cycle.all.js" type="text/javascript"></script>
  <script src="assets/public/script/jquery.bxslider.js" type="text/javascript"></script>
  <script src="assets/public/script/jquery.bxslider.min.js" type="text/javascript"></script>
  <script src="assets/public/script/main.js" type="text/javascript"></script>


  <style>
    .text-danger {
      color: #EB0A0E;
      font-size: 10px;
      position: absolute;
    }

    .alert-success {
      color: #ffffff;
      background-color: lightgreen;
      padding: 10px;
    }

    .alert-alert-danger {
      color: #ffffff;
      background-color: #c52424;
      padding: 10px;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="pageLoader"></div>

    <!-- <div class="formBody loginBody" style="background-image:url(assets/public/images/banner1.jpg);"> -->
    <div class="formContainer">
      <!-- <div class="imgBox"><a href="index"><img src="assets/public/images/logo.png" alt="KIET"></a></div> -->
      <div class="formBox fullwidth">
        <h3>Login to your Account</h3>
        <div class="flashdata">
        </div>
        <form method="post" action="sign-in">
          <div class="fields">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
          </div>
          <div class="fields">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
          </div>
          <div class="fields">
            <button class="login">Login</button>
            <div class="signup"><a href="sign-up">New Registration</a></div>
            <a href="forgotpass">Forgot Password?</a>
          </div>
        </form>
        <a href="index">Back to home</a>
      </div>
    </div>
  </div>
  </div>
</body>

</html>