<?php
session_start();    // เขียนทุกครั้งที่มีการใช้ตัวแปร session
include('user_db_connection.php');  // นำเข้าไฟล์ database

// ถ้าไม่มี $_SESSION['is_logged_in'] (เก็บสถานะ login โดยจะเก็บตอนที่สมัครสมาชิกหรือ login แล้วเท่านั้น) ให้กลับไปยังหน้า login.php เพื่อทำการ login ก่อน
if (!isset($_SESSION['is_logged_in'])) {
}

// ถ้ามี $_SESSION['is_logged_in'] แสดงว่ามีการ login เข้ามาแล้ว
else {
  // query ข้อมูลของคนที่ login เข้ามา เพื่อแสดงผลใน html
  $select_stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
  $select_stmt->bindParam(':username', $_SESSION['username']);
  $select_stmt->execute();
  $row = $select_stmt->fetch(PDO::FETCH_ASSOC);   // ทำบรรทัดนี้ กรณีที่เราต้องการดึงข้อมูลมาแสดง
}
?>

<!DOCTYPE html>
<html lang="en">

</html>
<html>

<!-- ส่วน HEAD -->

<head>
  <script src="/js/main.js"></script>
  <script src="/js/something.js"></script>
  <script src="/js/runpy.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- url ที่ได้จากเว็บ google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@500&family=Kanit:wght@200&family=Mitr:wght@200;300&display=swap" rel="stylesheet">
  <!-- url ของไฟล์ css ที่สร้างไว้ -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsivedevices.css">
  <link rel="stylesheet" href="css/desktopresponsive.css">
  <link rel="stylesheet" href="css/something.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<!-- ส่วน BODY -->

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
          <?php if (isset($_SESSION['is_logged_in'])) : ?>
              <button class="btnsignup" onclick="document.location.href='/auth/profile.php'">Hi <?php echo $row['username']; ?>!</button>
              <!-- <h2>Welcome <?php //echo $row['username']; ?></h2> -->
          <?php endif; ?>
          <?php if (!isset($_SESSION['is_logged_in'])) : ?>
            <button class="btnsignup" onclick="document.location.href='/auth/login.php'">Login</button>
          <?php endif; ?>
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


    <!-- ส่่วนหลักของ WEB -->
    <section class="mainsection">
      <!-- TEXT WELCOME -->
      <br>
      <div class="HeadTextTop">
        <!-- LOGIN  -->
        <div style="text-align: center; font-size: 300%;" class="animate__bounceIn">
          <?php if (isset($_SESSION['is_logged_in'])) : ?>
            <div>
              <h2>Welcome <?php echo $row['username']; ?></h2>
              <button onclick="document.location.href='/auth/profile.php'">Profile</button>
            </div>
          <?php endif; ?>
          <?php if (!isset($_SESSION['is_logged_in'])) : ?>
            <div class="topuserbardesk"><a class="btnsignup-d" href="/auth/login.php">Login</a></div>
          <?php endif; ?>
        </div>
        <h1 class="animate__bounceIn">WELCOME TO CLASSROOM INFO</h1>
      </div>
      <section class="lsec">
        <!-- SECTION LEFT GIF -->
        <div class="imgleftsectionfull">
          <img src="/Pictures/Hello.gif" alt="HELLOGIFHOME" class="animate__bounceIn">
        </div>
      </section>
      <!-- SECTION RIGHT CLOCK -->
      <article class="rightarticle">
        <div class="animate__bounceIn">
          <div class="clock">
            <h3 id="clockH2">CLOCK</h3>
            <div id="time">
              <div class="clockhr">
                <h3 id="hours">--</h3>
              </div>
              <div class="clockmin">
                <h3 id="minutes">--</h3>
              </div>
              <div class="clocksec">
                <h3 id="seconds">--</h3>
              </div>
              <div class="clockphase">
                <h3 id="phase">--</h3>
              </div>
            </div>
          </div>

          <!-- SECTION RIGHT NEWS UPDATE FOR MOBILE-->
          <div class="NewsUpdateMobile">
            <ul>
              <li><a href="#">This Website is still in developing!</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO2</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO3</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO4</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO5</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO6</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO7</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO8</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO9</a></li>
              <p>----------------------------------------------</p>
              <li><a href="#">News %INFO10</a></li>
              <p>----------------------------------------------</p>
            </ul>
          </div>
          <!-- SECTION RIGHT NEWS UPDATE FOR DESKTOP-->
          <div class="desknews">
            <div class="NewsUpdateDesktop">
              <ul>
                <li><a href="#">This Website is still in developing!</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO2</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO3</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO4</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO5</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO6</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO7</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO8</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO9</a></li>
                <p>-------------------------------------------------------------</p>
                <li><a href="#">News %INFO10</a></li>
                <p>-------------------------------------------------------------</p>
              </ul>
            </div>
          </div>


        </div>
      </article>

      <!-- 5STUDENT TABLE >>START TB401 -->
      <section class="sectiont401">
        <div class="animate__bounceIn">
          <div id="space2_01">
            <div class="space2"></div>
          </div>
          <table id="t401">
            <caption><b>รายชื่อเพื่อน ม.4/1</b></caption>
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อ</th>
              <th>นามสกุล</th>
              <th>เลขที่</th>
            </tr>
            <tr>
              <td><a href="/std1.php" class="stdgotoinfobt">1</a></td>
              <td>นายจตุรัตน์</td>
              <td>ช่างทอง</td>
              <td>3</td>
            </tr>
            <tr>
              <td><a href="/std2.php" class="stdgotoinfobt">2</a></td>
              <td>นายอดิเทพ</td>
              <td>แก้วเทพ</td>
              <td>13</td>
            </tr>
            <tr>
              <td><a href="/std3.php" class="stdgotoinfobt">3</a></td>
              <td>นายคณิน</td>
              <td>สลัดทุกข์</td>
              <td>17</td>
            </tr>
            <tr>
              <td><a href="/std4.php" class="stdgotoinfobt">4</a></td>
              <td>นายภาณุวัฒน์</td>
              <td>วงศ์จินดา</td>
              <td>9</td>
            </tr>
            <tr>
              <td><a href="/std5.php" class="stdgotoinfobt">5</a></td>
              <td>นายกิตติธร</td>
              <td>จงเจริญ</td>
              <td>16</td>
            </tr>
          </table>
          <div id="space2_02">
            <div class="space2"></div>
          </div>
        </div>
      </section>
      <!-- END TB401 -->
    </section>
    <!-- FOOTER -->
    <footer>
      Web Master : Sirisuk Tharntham <br>
      Email : 47539@ayw.ac.th
    </footer>
  </div>
</body>

</html>