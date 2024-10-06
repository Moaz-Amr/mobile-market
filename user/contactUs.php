<?php

include '../inc_db/db.php';
// هذا الكود لربط هذا الملف بملف الربط بالداتا بيز
session_start();
if ($_SESSION['user'] != '') {
    $username = $_SESSION['user'];
    
} else
    header("Location:index22.php");

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- هذه الصفحه لاختبار ان جافا سكريبت تعمل مع سيسس ويجب ان تكون الاكواد التاليه بنفس الترتيب  -->
    <!-- اولا اخذت مافات بوتستراب وحطتها في المشروع ثم نسخت نص الجاكواري وعملت ملف داخل مجلد جافاسكربت اسمه جاكواريدوت مين دوت جي اس ثم عملت هذا الملف للاختبار ثم رجعت لصفحه بوت ستراب لاخذ منها الاكواد -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: #343a40;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
      color: #ffffff !important;
    }

    .navbar-brand:hover,
    .navbar-nav .nav-link:hover {
      color: #d4a8d4 !important;
    }

    .container {
      margin-top: 20px;
    }

    .product-card {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      padding: 20px;
      text-align: center;
      transition: transform 0.2s;
    }

    .product-card:hover {
      transform: translateY(-10px);
    }

    .product-card img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
      margin-top: 40px;
    }

    .footer a {
      color: #d4a8d4;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body dir="rtl">
<nav class="navbar navbar-expand-lg bg-body-tertiary" dir="rtl">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">متجر الاجهزه الذكية</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" dir="ltr">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index22.php">الرئيسية</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php"
                >تسجيل الخروج</a
              >
            </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contactUs.php">تواصل معنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="show_car.php">عربه التسوق</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              انواع الاجهزة
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="show_sony.php">سوني</a></li>
              <li><a class="dropdown-item" href="show_samsung.php">سامسونج</a></li>
              <li><a class="dropdown-item" href="show_hawaui.php">هواوي</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">جميع الاجهزة</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="اكتب اسم الجهاز" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">البحث</button>
        </form>
      </div>
    </div>
  </nav>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form dir="rtl" action="" method="post" enctype="multipart/form-data">
                <div class="form-group" dir="rtl">
                    <label for="exampleInputEmail1" class="exam">ادخل استفسارك</label>
                    <textarea
                        type="text"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="ادخل استفسارك"
                        name="ask"></textarea>
                </div>
        
    <input type="submit" value="ارسال" class="btn btn-primary" name="send">

    <?php
    
    if (isset($_POST['send'])) {

        $ask = $_POST['ask'];
        $s_id = $row['id'];
        $query = "INSERT INTO contactus (ask, user_id) VALUES ('$ask', '$s_id')";
        $resultl = mysqli_query($connection, $query);
        if ($resultl) {
            echo 'تم الارسال';
        }
    }




    ?>

    </form>
</div>
    </div>
    <center><h2>سيتم عرض الاجابه علي سؤالك هنا في خلال 24 ساعه</h2></center>
    <div class="container">
      <!-- هذا الكونتاينير يمثل الصفحه الاساسيه لا تنسي ان الصفحه مقسمه ل 12 عمود -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
        <table class="table" dir="rtl">
            <tr>
                <td>الاستفسار</td>
                <td>الاجابه</td>
            </tr>
            <?php 
            $x='select * from contactus where  user_id='.$row['id'];

            $y=mysqli_query($connection,$x);
            while($z=mysqli_fetch_assoc($y)){
                echo'
                <tr>
                <td>'.$z['ask'].'</td>
                <td>'.$z['unser'].'</td>
                ';
                ?>
               
                <?php
               echo '</tr>';
                
            }
            ?>
        </table> 


        </div>
      </div>
    </div>
    