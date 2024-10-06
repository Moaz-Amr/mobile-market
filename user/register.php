<?php
session_start();
include'../inc_db/db.php';
// هذا الكود لربط هذا الملف بملف الربط بالداتا بيز
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

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
      integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
      crossorigin="anonymous"
    ></script>
    <meta charset="utf-8" />
    <style>
      .navbar-expand-lg {
        background-color: dimgrey;
      }

      /* هذا يجعل ال خلفيه سوداء */
      /* يمكن جلب الكلاس للعناصر مباشرتا من المتصفح عن طريق الضغط علي الزر الايسر علي العنصر المرتد ثم اختيار فحص */
      .navbar-brand {
        color: aliceblue;
      }

      .navbar-expand-lg .navbar-nav .nav-link {
        color: aliceblue;
      }

      .btn:not(:disabled):not(.disabled) {
        margin-left: 10px;
      }

      body {
        background-color: #D3D3D3;
      }

      .col-lg-4 {
        margin-top: 20px;
        /* float:right; */
      }

      .col-lg-4 img {
        /* لاحظ ان الصوره داخل كلاس 
        .col-lg-4 
        لذا اضفنا img */
        background-color: #d4a8d4;
        width: 80%;
        height: auto;
        margin-top: 4px;
      }
      .moaz {
        background-color: #dad2da;
        width: 80%;
        margin: 10px;
        border-radius: 30px;
      }
      .container {
        width: 100%;
      }
      .footer {
        width: 100%;
        height: 250px;
        background-color: dimgrey;
        margin-bottom: 0px !important;
        margin-top: 390px;
      }
      .form-text.text-muted {
        color: #fbf6f6 !important;
      }
      /* important تعطي للكود اوليه عاليه حتي  وان كان هناك كود عكسه في البوت ستراب */
      .col-lg-6.col-sm-6 {
        float: right;
        /* ستفيد في ان تجعل العناصر تبدا ترتيبها من اليمين */
      }
      .exam{
        direction: rtl !important;
        /* لماذا لا يتم تنفيز الامر */
      }
      .navbar-toggler{
        background-color: rgb(246, 242, 236) !important;
      }
    </style>
  </head>
  <!-- <body dir="rtl"> -->
  <!-- dir=rtl تجعل الصفحه تبدا من اليمين -->

  <body>
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
            <a class="nav-link active" aria-current="page" href="contactUs.php">تواصل معنا</a>
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
      <!-- هذا الكونتاينير يمثل الصفحه الاساسيه لا تنسي ان الصفحه مقسمه ل 12 عمود -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <form dir="rtl" action="" method="post">
          <div class="form-group">
              <label for="exampleInputEmail1" class="exam">الاسم</label>
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="كادخل اسم "
                name="pname"
              />
            </div>  
          <div class="form-group">
              <label for="exampleInputEmail1" class="exam">اسم المستخدم</label>
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="ادخل اسم المستخدم"
                name="username"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"> البريد الالكتروني</label>
              <input
                type="email"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="ادخل بريدك"
                name="email"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">ادخل كلمه المرور</label>
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="ادخل كلمه المرور"
                name="password"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">ادخل تاكيد كلمه المرور</label>
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="ادخل تاكيد كلمه المرور"
                name="password1"
              />
            </div>
            <input type="submit" value="تسجيل" class="btn btn-primary" name="register">
            <?php
            
              if(isset($_POST['register'])){
               try{
                  $pname=$_POST['pname'];
                  $email=$_POST['email'];  
                  $user=$_POST['username'];
                  $pass1=$_POST['password'];    
                  $pass2=$_POST['password1'];    
                  if($pass1===$pass2){  
                    $sqll="insert into users(fullname,email,username,password)values('$pname','$email','$user','$pass1')";
                    // يسرس هو اسم الجدول و المدخلات الاولي هي عواميد الجدول والثانيه هي المتغيرات المقابله لهذه العواميد
                    $resultl=mysqli_query($connection,$sqll);
                    if($resultl){
                      // echo"تمت عمليه التسجيل بنجاح";
                      $_SESSION['user']=$user;
                      echo '<script>window.location.replace("welcome.php");</script>';
                    }
                  }
                  else{
                    echo "الرجاء مطابقه كلمه المرور";
                  }
                
                }
                catch (mysqli_sql_exception $e) {
                  // التحقق من نوع الخطأ
                  if ($e->getCode() == 1062) {
                      // 1062 هو كود خطأ MySQL لـ Duplicate Entry
                      echo "عذرًا، اسم المستخدم '{$user}' مستخدم بالفعل. الرجاء اختيار اسم مستخدم آخر.";
                  } else {
                      // للأخطاء الأخرى
                      echo "حدث خطأ أثناء التسجيل. الرجاء المحاولة مرة أخرى لاحقًا.";
                  }
              }
              }
                

                
                
            ?>
          </form>
        </div>
      </div>
    </div>

    <!-- كلك شمال + فورمات دوكيومن +  prettier   لتنظيم الكود-->
    <!-- اضافه جديده تريك كود سيسس عن طريق الضغط علي كنترول ثم الاسم الخاص بالكلاس -->
    <footer class="footer">
      <div class="col-lg-6 col-sm-6">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">البريد الالكتروني</label>
            <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="Enter email"
            />
            <small id="emailHelp" class="form-text text-muted"
              >لن نشارك المعلومات مع احد</small
            >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">كلمه المرور</label>
            <input
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              placeholder="Password"
            />
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-lg-6 col-sm-6">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13649.692362050884!2d30.031121049999992!3d31.2090057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5db1829f34347%3A0x5fb8e5808543cac0!2z2YLYtdixINiv2YfYqCDZhNmE2K3ZgdmE2KfYqg!5e0!3m2!1sar!2seg!4v1721738570180!5m2!1sar!2seg"
          width="400"
          height="250"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </footer>
  </body>
</html>
