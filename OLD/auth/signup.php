<?php session_start(); ?>
<?php if (isset($_SESSION['is_logged_in'])) {
  header('location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">

</html>
<html>

<head>
  <script src="/js/main.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <!-- url ที่ได้จากเว็บ google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@500&family=Kanit:wght@200&family=Mitr:wght@200;300&display=swap" rel="stylesheet">
  <!-- url ของไฟล์ css ที่สร้างไว้ -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/desktopresponsive.css">
  <link rel="stylesheet" href="/css/auth.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body style="background-color:lightgoldenrodyellow;" oncontextmenu="return true" onload="mainfunc()">
  <div class="responsive">


    <header>
      <div id="DIVBG">
        <img src="/Pictures/Hpic.jpg" alt="">
      </div>
    </header>


    <!-- MOBILE NAV Under min-width: 600px -->
    <div class="mobilenav">
      <nav class="navbar navbar-dark" id="NAVmobileBG">
        <div id="BTmobileNavHub" class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-house-fill" viewBox="0 0 16 16" id="backhomenav" onclick="document.location.href='/index.php'">
            <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg>
          <button class="btnsignup" onclick="document.location.href='login.php'">Login</button>
        </div>
      </nav>
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="p-4" id="navbarToggleExternalContentBG">
          <h5 class="text-white h4">CLASSROOM INFO</h5>
          <span class="text-muted">


            <nav id="mobilenavbt">
              <form class="container-fluid justify-content-start">
                <a id="mnavbt1" class="btn btn-outline-success me-2" type="button"></a><br>
                <a id="mnavbt2" class="btn btn-sm btn-outline-secondary" type="button"></a>
                <a id="mnavbt3" class="btn btn-sm btn-outline-secondary" type="button"></a>
                <a id="mnavbt4" class="btn btn-sm btn-outline-secondary" type="button"></a>
                <a id="mnavbt5" class="btn btn-sm btn-outline-secondary" type="button"></a>
                <a id="mnavbt6" class="btn btn-sm btn-outline-secondary" type="button"></a>
              </form>
            </nav>


          </span>
        </div>
      </div>
    </div>
    <!-- DESKTOP NAV min-width: 600px -->
    <div class="desktopnav">
      <nav>
        <a id="navbt1" class="button"></a>
        <a id="navbt2" class="button"></a>
        <a id="navbt3" class="button"></a>
        <a id="navbt4" class="button"></a>
        <a id="navbt5" class="button"></a>
        <a id="navbt6" class="button"></a>
      </nav>
    </div>


    <section class="mainsection">

      <div class="signinbartop">
        <a class="btnsigninalld" href="login.php">Login</a>
      </div>

      <!-- SIGN UP FORM-->
      <div class="space2"></div>
      <div class="signup-modal">
        <form class="modal-form" action="signup_action.php" method="post">
          <div class="signup-container">
            <h1 id="signup-contain-center">Authentication Form</h1>
            <p id="signup-contain-center">Please fill in this form to create an account.</p>
            <hr>
            <!-- SESSION ERROR CHECK ANNOUNCE !!START CODE-->
            <div style="text-align: center; color: red; font-size: 300%;" class="animate__bounceIn">
              <?php if (isset($_SESSION['err_fill'])) : ?>
                <div>
                  <?php echo $_SESSION['err_fill']; ?>
                </div>
              <?php endif; ?>
              <?php if (isset($_SESSION['err_pw'])) : ?>
                <div>
                  <?php echo $_SESSION['err_pw']; ?>
                </div>
              <?php endif; ?>
              <?php if (isset($_SESSION['exist_uname'])) : ?>
                <div>
                  <?php echo $_SESSION['exist_uname']; ?>
                </div>
              <?php endif; ?>
              <?php if (isset($_SESSION['exist_email'])) : ?>
                <div>
                  <?php echo $_SESSION['exist_email']; ?>
                </div>
              <?php endif; ?>
              <?php if (isset($_SESSION['exist_firstname'])) : ?>
                <div>
                  <?php echo $_SESSION['exist_firstname']; ?>
                </div>
              <?php endif; ?>
              <?php if (isset($_SESSION['err_insert'])) : ?>
                <div>
                  <?php echo $_SESSION['err_insert']; ?>
                </div>
              <?php endif; ?>
            </div>
            <!-- SESSION ERROR CHECK ANNOUNCE !!END CODE-->
            <!-- EMAIL INPUT-->
            <label for="mail"><b>Email</b></label>
            <input type="text" id="mail" placeholder="studentID@ayw.ac.th" name="email">
            <!-- FIRSTNAME INPUT-->
            <label for="fname"><b>Firstname</b></label>
            <input type="text" id="fname" placeholder="Firstname" name="firstname">
            <!-- LASTNAME INPUT-->
            <label for="lname"><b>Lastname</b></label>
            <input type="text" id="lname" placeholder="Lastname" name="lastname">
            <!-- GENDER INPUT-->
            <div>
              <label for="reg_selectgender">Choose gender:</label>
              <select name="gender" id="reg_selectgender">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <!-- PREFIX INPUT-->
              <label for="reg_selectnameprefix">Choose prefix:</label>
              <select name="prefix" id="reg_selectnameprefix">
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
              </select>
              <!-- BLOOD TYPE INPUT-->
              <label for="reg_bloodtype">Choose Blood Type:</label>
              <select name="blood_type" id="reg_bloodtype">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
              <!-- Number INPUT-->
              <label for="number">Number:</label>
              <input type="int" id="number" placeholder="1-100">
              <!-- BIRTHDAY INPUT-->
              <label for="birth">Birthday:</label>
              <input type="date" id="birth" name="birthday">
            </div>

            <!-- USERNAME INPUT-->
            <label for="user"><b>Username</b></label>
            <input type="text" id="user" name="username">
            <!-- PASSWORD INPUT-->
            <label for="psw"><b>Password</b></label>
            <input type="password" id="psw" name="password">
            <!-- CONFIRM PASSWORD INPUT-->
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" name="confirm_password">
            <!-- REMEMBER CHECK BOX-->
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember [Still cannot use!]
            </label>
            <!-- SUBMIT BUTTON-->
            <div id="signup-contain-center">
              <button type="button" onclick="document.location.href='../index.php'" class="cancelbtn">Return to Home</button>
              <button type="submit" name="submit" class="signup">Create an account</button>
            </div>
          </div>
        </form>
      </div>
      <br>
    </section>
    <!-- FOOTER -->
    <footer>
      Web Master : Sirisuk Tharntham <br>
      Email : 47539@ayw.ac.th
    </footer>
  </div>
</body>

</html>

<!-- CLEAR SESSTION ERROR CHECK ON LOAD LOGIN PAGE-->
<?php
if (isset($_SESSION['err_fill']) || isset($_SESSION['err_pw']) || isset($_SESSION['exist_uname']) || isset($_SESSION['exist_email']) || isset($_SESSION['exist_firstname']) || isset($_SESSION['err_insert'])) {
  unset($_SESSION['err_fill']);
  unset($_SESSION['err_pw']);
  unset($_SESSION['exist_uname']);
  unset($_SESSION['exist_email']);
  unset($_SESSION['exist_firstname']);
  unset($_SESSION['err_insert']);
}
?>