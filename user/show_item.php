<?php
include '../inc_db/db.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM items WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تفاصيل الهاتف - <?php echo htmlspecialchars($row['name']); ?></title>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar-expand-lg {
      background-color: #343a40;
    }
    .navbar-brand, .navbar-expand-lg .navbar-nav .nav-link {
      color: #ffffff;
    }
    .product-details {
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-top: 30px;
    }
    .product-image {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .product-title {
      color: #343a40;
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    .product-price {
      font-size: 1.8rem;
      color: #28a745;
      margin-bottom: 20px;
    }
    .product-description {
      font-size: 1.1rem;
      color: #6c757d;
      margin-bottom: 20px;
    }
    .product-category {
      font-size: 1.1rem;
      color: #17a2b8;
      margin-bottom: 20px;
    }
    .btn-buy {
      font-size: 1.2rem;
      padding: 10px 30px;
    }
  </style>
</head>

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
    <div class="row product-details">
      <div class="col-md-6">
        <img src="../image/<?php echo htmlspecialchars($row['img']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="product-image">
      </div>
      <div class="col-md-6">
        <h1 class="product-title"><?php echo htmlspecialchars($row['name']); ?></h1>
        <p class="product-price">السعر: <?php echo htmlspecialchars($row['price']); ?> ريال</p>
        <p class="product-description">الوصف: <?php echo htmlspecialchars($row['descrp']); ?></p>
        <p class="product-category">الفئة: <?php echo htmlspecialchars($row['category']); ?></p>
        <!-- <a href="car.php?id='.$id.'" class="btn btn-primary btn-buy">اضف الي العربة</a> -->
        <a href="car.php?id=<?php echo $id; ?>" class="btn btn-primary btn-buy">اضف الي العربة</a>
      </div>
    </div>
  </div>

</body>
</html>