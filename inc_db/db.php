<?php
$connection = mysqli_connect("localhost:3307", "root", "", "mobile_store");
//              اسم التابل   الباسورد   اسم المستخدم    اسم السيرفر 
// هذه هي طريقه ربط الصفحه بالداتا بيز
if(!$connection){
    echo("فشل الاتصال بقاعده البيانات");
}
?>