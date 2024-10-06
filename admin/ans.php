<?php
include'../inc_db/db.php';
// هذا الكود لربط هذا الملف بملف الربط بالداتا بيز
session_start();
if($_SESSION['isAdmin']==1){
    include '../inc_db/db.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM contactus WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
}
else
header("Location:admin_login.php");

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
            height: 300px;
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
            height: 300px;
            background-color: dimgrey;
            margin-bottom: 0px;
            margin-top: 90px;
        }

        .form-text.text-muted {
            color: #fbf6f6 !important;
        }

        /* important تعطي للكود اوليه عاليه حتي  وان كان هناك كود عكسه في البوت ستراب */
        .col-lg-6.col-sm-6 {
            float: right;
            /* ستفيد في ان تجعل العناصر تبدا ترتيبها من اليمين */
        }
    </style>
</head>
<!-- <body dir="rtl"> -->
<!-- dir=rtl تجعل الصفحه تبدا من اليمين -->


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

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form dir="rtl" action="" method="post" enctype="multipart/form-data">
                <div class="form-group" dir="rtl">
                    <center><h3>السؤال</h3></center>
                <center><label for="exampleInputEmail1" class="exam"><?php echo $row['ask'] ?></label></center>
                    <br>
                    <label for="exampleInputEmail1" class="exam">ادخل الاجابه</label>
                    <textarea
                        type="text"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="ادخل الاجابه"
                        name="ans"></textarea>
                </div>
        
    <input type="submit" value="ارسال" class="btn btn-primary" name="send">

    <?php
    
    if (isset($_POST['send'])) {

        $ans = $_POST['ans'];
        // $query = "INSERT INTO contactus (unser) VALUES ('$ans')";
        $query="update contactus set unser='$ans' WHERE  id=$id";

        $resultl = mysqli_query($connection, $query);
        if ($resultl) {
            echo 'تم الرد';
            echo "<script>window.location.href='show_ask.php';</script>";

        }
    }




    ?>

    </form>
    </div>
    </div>