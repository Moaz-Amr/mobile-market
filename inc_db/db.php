<?php
$connection = mysqli_connect("localhost:3307", "root", "", "mobile_store");


if(!$connection){
    echo("فشل الاتصال بقاعده البيانات");
}
?>