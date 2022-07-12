<?php
session_start();    // เขียนทุกครั้งที่มีการใช้ตัวแปร session
include('user_db_connection.php');  // นำเข้าไฟล์ database

// ทำการเช็คว่ามีการ submit form หรือไม่ isset() จะเช็คว่ามี data หรือไม่
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // ถ้าไม่มีการกรอกข้อมูลเข้ามาให้ทำการส่งข้อความกลับไปยังหน้า signup.php
    if (empty($email) || empty($firstname) || empty($lastname) || empty($gender) || empty($birthday) || empty($username) || empty($password) || empty($confirm_password)) {
        $_SESSION['err_fill'] = "กรุณากรอกข้อมูลให้ครบถ้วน";
        header('location: signup.php');
    } 

    // กรณีที่มีการกรอกข้อมูลเข้ามาครบถ้วน จะทำการตรวจสอบว่ารหัสผ่านกับยืนยันรหัสผ่านตรงกันหรือไม่
    else {
        // ถ้ารหัสผ่านกับยืนยันรหัสผ่านไม่ตรงกัน ให้ทำการส่งข้อความกลับไปยังหน้า signup.php
        if ($password !== $confirm_password) {
            $_SESSION['err_pw'] = "กรุณากรอกรหัสผ่านให้ตรงกัน";
            header('location: signup.php');
        } 

        // ถ้ารหัสผ่านกับยืนยันรหัสผ่านตรงกันจะทำการ query ข้อมูล เพื่อเช็คว่ามี username นี้อยู่ในระบบหรือไม่
        else {
            // query ข้อมูล เพื่อเช็คว่ามี username นี้อยู่ในระบบหรือไม่
            $select_stmt = $db->prepare("SELECT COUNT(username) AS count_uname FROM users WHERE username = :username");
            $select_stmt->bindParam(':username', $username);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            // ถ้ามี username ในระบบให้ทำการส่งข้อความกลับไปยังหน้า signup.php
            if ($row['count_uname'] != 0) {
                $_SESSION['exist_uname'] = "มี username นี้ในระบบ";
                header('location: signup.php');
            } 

            // ถ้าไม่มี username จะquery ข้อมูล เพื่อเช็คว่ามี email นี้อยู่ในระบบหรือไม่
            else {
                // query ข้อมูล เพื่อเช็คว่ามี email นี้อยู่ในระบบหรือไม่
                $select_stmt = $db->prepare("SELECT COUNT(email) AS count_email FROM users WHERE email = :email");
                $select_stmt->bindParam(':email', $email);
                $select_stmt->execute();
                $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

                            // ถ้ามี username ในระบบให้ทำการส่งข้อความกลับไปยังหน้า signup.php
                if ($row['count_email'] != 0) {
                    $_SESSION['exist_email'] = "มี email นี้ในระบบ";
                    header('location: signup.php');
                }

                // ถ้าไม่มี email จะquery ข้อมูล เพื่อเช็คว่ามี firstname นี้อยู่ในระบบหรือไม่
                else  {
                    // query ข้อมูล เพื่อเช็คว่ามี firstname นี้อยู่ในระบบหรือไม่
                    $select_stmt = $db->prepare("SELECT COUNT(firstname) AS count_firstname FROM users WHERE firstname = :firstname");
                    $select_stmt->bindParam(':firstname', $firstname);
                    $select_stmt->execute();
                    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

                    // ถ้ามี firstname ในระบบให้ทำการส่งข้อความกลับไปยังหน้า signup.php
                    if ($row['count_firstname'] != 0) {
                        $_SESSION['exist_firstname'] = "มี firstname นี้ในระบบ";
                        header('location: signup.php');
                    }
                    // ถ้าไม่มี firstname จะทำการเข้ารหัสโดย password_hash() !!lastname สามารถซ้ำกันได้
                    else {
                        // ทำการเข้ารหัสโดย password_hash()
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $insert_stmt = $db->prepare("INSERT INTO users (firstname, lastname, username, role, email, gender, birthday, password) VALUES (:firstname, :lastname, :username, 'user', :email, :gender, :birthday, :password)");
                        $insert_stmt->bindParam(':firstname', $firstname);
                        $insert_stmt->bindParam(':lastname', $lastname);
                        $insert_stmt->bindParam(':username', $username);
                        $insert_stmt->bindParam(':email', $email);
                        $insert_stmt->bindParam(':gender', $gender);
                        $insert_stmt->bindParam(':birthday', $birthday);
                        $insert_stmt->bindParam(':password', $password);
                        $insert_stmt->execute();

                        // ถ้าสมัครสมาชิกสำเร็จ จะเก็บ username และ สถานะ login และไปยังหน้า profile.php
                        if ($insert_stmt) {
                            $_SESSION['username'] = $username;
                            $_SESSION['is_logged_in'] = true;
                            header('location: profile.php');
                        } 

                        // ถ้าสมัครสมาชิกไม่สำเร็จจะกลับไปยังหน้า signup.php
                        else {
                            $_SESSION['err_insert'] = "ไม่สามารถนำเข้าข้อมูลได้";
                            header('location: register.php');
                        }
                    }
                }
            }
        }
    }
}
