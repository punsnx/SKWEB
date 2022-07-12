<!DOCTYPE html>
<html lang="en"></html>
<html>
  <head>
    <script src="/js/main.js"></script>
    <script src="/js/stdgpax.js"></script>

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
      <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-house-fill" viewBox="0 0 16 16" id="backhomenav" onclick="document.location.href='/index.html'">
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
          
<script>

</script>
            <div class="stdinfo-container">
                <label for="Name"><b>ชื่อ</b></label>
                <input id="stdname" type="text" placeholder="ชื่อ" name="Name" >
        
                <label for="Name"><b>นามสกุล</b></label>
                <input id="stdlasrname" type="text" placeholder="นามสกุล" name="Name" >
        
                <label for="SubjectSelect"><b>จำนวนวิชาที่เรียน</b></label>
                <select id="sjselect" name="NumSJSELECT" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                  </select>
                  <button onclick="submit()" type="submit" class="stdsubmitbt">Submit</button>
                  <h3 id=show1>--</h3>
                  <h3 id=show2>--</h3>
                  <h3 id=show3>--</h3>
            </div>
            <script>
            </script>
        <div id="stdgpaxcontainer">
            <table id="tbgpax">
                <tr id="tr-sj0">
                  <th>ลำดับ</th>
                  <th>วิชา</th>
                  <th>คะแนน</th>
                  <th>หน่วยกิต</th>
                  <th>เกรด</th>
                </tr>
                <tr id="tr-sj1">
                  <td><h3>1</h3></td>
                  <td><input id="subj1"></td>
                  <td><input id="subj1p" class="gpaxpoints"></td>
                  <td><input id="subj1c"></td>
                  <td><input id="subj1g"></td>
                </tr>
                <tr id="tr-sj2">
                  <td><h3>2</h3></td>
                  <td><input id="subj2"></td>
                  <td><input id="subj2p" class="gpaxpoints"></td>
                  <td><input id="subj2c"></td>
                  <td><input id="subj2g"></td>
                </tr>
                <tr id="tr-sj3">
                  <td><h3>3</h3></td>
                  <td><input id="subj3"></td>
                  <td><input id="subj3p" class="gpaxpoints"></td>
                  <td><input id="subj3c"></td>
                  <td><input id="subj3g"></td>
                </tr>
                <tr id="tr-sj4">
                  <td><h3>4</h3></td>
                  <td><input id="subj4"></td>
                  <td><input id="subj4p" class="gpaxpoints"></td>
                  <td><input id="subj4c"></td>
                  <td><input id="subj4g"></td>
                </tr>
                <tr id="tr-sj5">
                  <td><h3>5</h3></td>
                  <td><input id="subj5"></td>
                  <td><input id="subj5p" class="gpaxpoints"></td>
                  <td><input id="subj5c"></td>
                  <td><input id="subj5g"></td>
                </tr>
                <tr id="tr-sj6">
                  <td><h3>6</h3></td>
                  <td><input id="subj6"></td>
                  <td><input id="subj6p" class="gpaxpoints"></td>
                  <td><input id="subj6c"></td>
                  <td><input id="subj6g"></td>
                </tr>
                <tr id="tr-sj7">
                  <td><h3>7</h3></td>
                  <td><input id="subj7"></td>
                  <td><input id="subj7p" class="gpaxpoints"></td>
                  <td><input id="subj7c"></td>
                  <td><input id="subj7g"></td>
                </tr>
                <tr id="tr-sj8">
                  <td><h3>8</h3></td>
                  <td><input id="subj8"></td>
                  <td><input id="subj8p" class="gpaxpoints"></td>
                  <td><input id="subj8c"></td>
                  <td><input id="subj8g"></td>
                </tr>
                <tr id="tr-sj9">
                  <td><h3>9</h3></td>
                  <td><input id="subj9"></td>
                  <td><input id="subj9p" class="gpaxpoints"></td>
                  <td><input id="subj9c"></td>
                  <td><input id="subj9g"></td>
                </tr>
                <tr id="tr-sj10">
                  <td><h3>10</h3></td>
                  <td><input id="subj10"></td>
                  <td><input id="subj10p" class="gpaxpoints"></td>
                  <td><input id="subj10c"></td>
                  <td><input id="subj10g"></td>
                </tr>
                <tr id="tr-sj11">
                  <td><h3>11</h3></td>
                  <td><input id="subj11"></td>
                  <td><input id="subj11p" class="gpaxpoints"></td>
                  <td><input id="subj11c"></td>
                  <td><input id="subj11g"></td>
                </tr>
                <tr id="tr-sj12">
                  <td><h3>12</h3></td>
                  <td><input id="subj12"></td>
                  <td><input id="subj12p" class="gpaxpoints"></td>
                  <td><input id="subj12c"></td>
                  <td><input id="subj12g"></td>
                </tr>
                <tr id="tr-sj13">
                  <td><h3>13</h3></td>
                  <td><input id="subj13"></td>
                  <td><input id="subj13p" class="gpaxpoints"></td>
                  <td><input id="subj13c"></td>
                  <td><input id="subj13g"></td>
                </tr>
                <tr id="tr-sj14">
                  <td><h3>14</h3></td>
                  <td><input id="subj14"></td>
                  <td><input id="subj14p" class="gpaxpoints"></td>
                  <td><input id="subj14c"></td>
                  <td><input id="subj14g"></td>
                </tr>
                <tr id="tr-sj15">
                  <td><h3>15</h3></td>
                  <td><input id="subj15"></td>
                  <td><input id="subj15p" class="gpaxpoints"></td>
                  <td><input id="subj15c"></td>
                  <td><input id="subj15g"></td>
                </tr>
                <tr id="tr-sj16">
                  <td><h3>16</h3></td>
                  <td><input id="subj16"></td>
                  <td><input id="subj16p" class="gpaxpoints"></td>
                  <td><input id="subj16c"></td>
                  <td><input id="subj16g"></td>
                </tr>
                <tr id="tr-sj17">
                  <td><h3>17</h3></td>
                  <td><input id="subj17"></td>
                  <td><input id="subj17p" class="gpaxpoints"></td>
                  <td><input id="subj17c"></td>
                  <td><input id="subj17g"></td>
                </tr>
                <tr id="tr-sj18">
                  <td><h3>18</h3></td>
                  <td><input id="subj18"></td>
                  <td><input id="subj18p" class="gpaxpoints"></td>
                  <td><input id="subj18c"></td>
                  <td><input id="subj18g"></td>
                </tr>
                <tr id="tr-sj19">
                  <td><h3>19</h3></td>
                  <td><input id="subj19"></td>
                  <td><input id="subj19p" class="gpaxpoints"></td>
                  <td><input id="subj19c"></td>
                  <td><input id="subj19g"></td>
                </tr>
                <tr id="tr-sj20">
                  <td><h3>20</h3></td>
                  <td><input id="subj20"></td>
                  <td><input id="subj20p" class="gpaxpoints"></td>
                  <td><input id="subj20c"></td>
                  <td><input id="subj20g"></td>
                </tr>
                <caption><h3>Your GPA : </h3><h3>--</h3>
                    <b>ระบบคำนวน GPA</b>
                    <button>OK</button>
                </caption>
              </table>
        </div>


      </div>
      <section class="lsec">
        <div class="animate__bounceIn">
        <img src="/Pictures/Dora.gif" alt="HELLOGIFHOME" width="350" height="mx-auto" class="animate__flash" style="border: 1px solid black; margin-left: 50px;">
      </div>
      </section>
      <article class="rightarticle">
        <div class="animate__bounceIn"><table id="FilesTable">
          <tr>
            <th>หัวข้อ</th>
            <th>ข้อมูล</th>
          </tr>
          <tr>
            <td>Math</td>
            <td><a href="/MathFiles.html" class="btfiles">Files & Videos</a></td>
          </tr>
          <tr>
            <td>Physic</td>
            <td><a href="/fallback.html" class="btfiles">Files & Videos</a></td>
          </tr>
          <tr>
            <td>Chemistry</td>
            <td><a href="/fallback.html" class="btfiles">Files & Videos</a></td>
          </tr>
          <tr>
            <td>Biology</td>
            <td><a href="/fallback.html" class="btfiles">Files & Videos</a></td>
          </tr>
          <tr>
            <td>Astronomy</td>
            <td><a href="/fallback.html" class="btfiles">Files & Videos</a></td>
          </tr>
          <tr>
            <td>Thai</td>
            <td><a href="/fallback.html" class="btfiles">Files & Videos</a></td>
          </tr>
          <tr>
            <td>English</td>
            <td><a href="/fallback.html" class="btfiles">Files & Videos</a></td>
          </tr>
        </table></div>
      </article>
      <div><h1 style="text-align: center; color: red; font-size: 300%;" class="animate__bounceIn"><strong>This Website is still in developing!</strong></h1></div>
      <hr>
      <br>

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
        <a href="/index.html" class="backtohome">Back to home</a>
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