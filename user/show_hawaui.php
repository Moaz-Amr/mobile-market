<?php
session_start();
include '../inc_db/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>متجر الاجهزه الذكية</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
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

  <div class="container">
    <div class="row">
      <?php
          $sqlm = "select * from items where category='Hawaui'";
      $rat = mysqli_query($connection, $sqlm);
      while ($res = mysqli_fetch_assoc($rat)) {
        echo '
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="product-card">
              <h5>' . $res ['name'] . '</h5>
              <img src="../image/'. $res['img'] . '" alt="' . $res['name'] . '" />
              <p>' . $res['descrp'] . '</p>
              <p>السعر: ' . $res['price'] . ' جنيه</p>
              <a href="show_item.php?id=' . $res['id'] . '" class="btn btn-primary">مشاهدة التفاصيل</a>
            </div>
          </div>
        ';
      }
      ?>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 col-sm-6">
      <form action="" dir="rtl" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1"> اسم المستخدم</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل اسم المستخدم" name="user" />
          <small id="emailHelp" class="form-text text-muted">لن نشارك المعلومات مع احد</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">كلمه المرور</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" />
        </div>
        <a type="button" href="register.php" name="register" value="" class="btn btn-outline-success">تسجيل حساب جديد</a>
        <input type="submit"  name="signin" value="تسجيل الدخول"  class="btn btn-primary"/>


      <?php
      
      if(isset($_POST['signin'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $sql="select * from users where username='$user' and password='$pass'";
        $rat=mysqli_query($connection,$sql);
        while($rat=mysqli_fetch_assoc($rat)){
          
          $_SESSION['user']=$user;
          echo '<script>window.location.replace("welcome.php");</script>';
        }
        echo'<center><p>البيانات غير صحيحه</p></center>';
        
      }
      ?>
      </form>
    </div>
        <div class="col-lg-6 col-sm-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13649.692362050884!2d30.031121049999992!3d31.2090057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5db1829f34347%3A0x5fb8e5808543cac0!2z2YLYtdixINiv2YfYqCDZhNmE2K3ZgdmE2KfYqg!5e0!3m2!1sar!2seg!4v1721738570180!5m2!1sar!2seg" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>