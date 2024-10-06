<?php
try{
include'../inc_db/db.php';
// هذا الكود لربط هذا الملف بملف الربط بالداتا بيز
session_start();
if($_SESSION['user']!=''){
$username=$_SESSION['user'];
}
else
header("Location:register.php");

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    
        $s_id = $row['id'];
        $query = "INSERT INTO car (item, user_id) VALUES ('$id', '$s_id')";
        $resultl = mysqli_query($connection, $query);
        if ($resultl) {
            echo 'تمت الاضافه';
            header("Location:show_car.php");

        }
    }
    catch (Exception $e) {
        echo '<h1>هذا المنتج موجود بالفعل في عربتك </h1>';

    }

?>
