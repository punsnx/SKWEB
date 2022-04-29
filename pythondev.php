<?php 
    session_start();    // เขียนทุกครั้งที่มีการใช้ตัวแปร session
    include('user_db_connection.php');  // นำเข้าไฟล์ database
?>
<!DOCTYPE html>
<html lang="en"></html>
<html>
  <head>
    <script src="/js/main.js"></script>
    <script src="/js/caculator.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <!-- url ที่ได้จากเว็บ google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=K2D:wght@500&family=Kanit:wght@200&family=Mitr:wght@200;300&display=swap" rel="stylesheet">
    <!-- url ของไฟล์ css ที่สร้างไว้ -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsivedevices.css">
    <link rel="stylesheet" href="/css/desktopresponsive.css">



    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </head>


  <body style="background-color:lightgoldenrodyellow;" oncontextmenu="return false" onload="mainfunc(), config()">
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
        <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
      </svg>
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
      <br>
      <h1 style="text-align: center; font-size: 300%;" class="animate__bounceIn">Projects</h1>
      <div class="fpjtop">

      <div class="animate__bounceIn" id="tprofilelist">




      </div>
      <!-- START TB401 -->
      <div class="animate__bounceIn"><table id="t401">
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
      </div>

      <div>
        <a href="/index.php" class="backtohome">Back to home</a>
      </div>
      <br>
      <!-- END TB401 -->
    </section>
 
    <!-- FOOTER -->
    <footer>
      Web Master : Sirisuk  Tharntham <br>
      Email : 47539@ayw.ac.th
    </footer>
  </div>
  </body>
</html>