<?php
session_start();    // เขียนทุกครั้งที่มีการใช้ตัวแปร session
include('user_db_connection.php');  // นำเข้าไฟล์ database

// ถ้าไม่มี $_SESSION['is_logged_in'] (เก็บสถานะ login โดยจะเก็บตอนที่สมัครสมาชิกหรือ login แล้วเท่านั้น) ให้กลับไปยังหน้า login.php เพื่อทำการ login ก่อน
if (!isset($_SESSION['is_logged_in'])) {
  header('location: login.php');
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

<head>
  <script src="/js/main.js"></script>
  <script src="/js/caculator.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <!-- url ที่ได้จากเว็บ google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@500&family=Kanit:wght@200&family=Mitr:wght@200;300&display=swap" rel="stylesheet">
  <!-- url ของไฟล์ css ที่สร้างไว้ -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/responsivedevices.css">
  <link rel="stylesheet" href="/css/desktopresponsive.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>


<body style="background-color:lightgoldenrodyellow;" oncontextmenu="return true" onload="mainfunc(), config()">
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
            <button class="btnsignup" onclick="document.location.href='/auth/logout.php'">Log out</button>
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


    <section class="mainsection">
      <!-- LOGIN  -->
      <div style="text-align: center; font-size: 300%;" class="animate__bounceIn">
        <?php if (isset($_SESSION['is_logged_in'])) : ?>
          <div>
            <button onclick="document.location.href='/auth/logout.php'">Log out</button>
          </div>
        <?php endif; ?>
      </div>
      <br>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="mt-5">Profile Page</h1>
            <div class="card mt-5">
              <div class="card-body" style="line-height: 2.5;">
                <h4>รายละเอียดบัญชี</h4>

                <!-- ทำการแสดงผลข้อมูลที่ query ขึ้นมา  โดยรูปแบบจะเป็น $row['ชื่อคอลัมน์']-->
                <span style="font-weight: 700;">User-ID</span> : <span><?php echo $row['user_id']; ?></span><br>
                <span style="font-weight: 700;">Name</span> : <span><?php echo $row['firstname'];
                                                                    echo " ";
                                                                    echo $row['lastname']; ?></span><br>
                <span class="mt-5" style="font-weight: 700;">Username</span> : <span><?php echo $row['username']; ?></span><br>
                <span style="font-weight: 700;">Gender</span> : <span><?php echo $row['gender']; ?></span><br>
                <span style="font-weight: 700;">Birthday</span> : <span><?php echo $row['birthday']; ?></span><br>
                <span style="font-weight: 700;">Email</span> : <span><?php echo $row['email']; ?></span><br>
                <span style="font-weight: 700;">Role</span> : <span><?php echo $row['role']; ?></span><br>
                <div>
                  <button>USER CONFIG</button>
                </div><br>
                <?php if ($row['role'] == "admin") : ?>
                  <div>
                    <button>ADMIN CONFIG</button>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="animate__bounceIn" id="tprofilelist">
        <?php
        echo "<table>"; // style='border: solid 1px black;'
        echo "<tr><th>USER_ID</th><th>FIRSTNAME</th><th>LASTNAME</th><th>USERNAME</th><th>GENDER</th><th>BIRTHDAY</th><th>EMAIL</th><th>ROLE</th></tr>";

        class TableRows extends RecursiveIteratorIterator
        {
          function __construct($it)
          {
            parent::__construct($it, self::LEAVES_ONLY);
          }

          function current()
          {
            return "<td>" . parent::current() . "</td>";
          } // style='width:150px;border:1px solid black;'

          function beginChildren()
          {
            echo "<tr>";
          }

          function endChildren()
          {
            echo "</tr>" . "\n";
          }
        }
        try {

          $stmt = $db->prepare("SELECT user_id, firstname, lastname, username, gender, birthday, email, role FROM users");
          $stmt->execute();

          // set the resulting array to associative
          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
          foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
            echo $v;
          }
        } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</table>";
        ?>
      </div>
      <br>
      <div style="position: relative;margin-top: 60px;">
        <a href="/index.php" style="position: absolute; bottom: 20px;" class="backtohome">Back to home</a>
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