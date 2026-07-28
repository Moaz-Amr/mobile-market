<?php
/**
 * ملف تهيئة الاتصال بقاعدة البيانات.
 *
 * يقوم بإنشاء اتصال نشط بقاعدة بيانات MySQL (mobile_store).
 * وفي حال فشل الاتصال، يتم عرض رسالة خطأ للمستخدم.
 */

$connection = mysqli_connect("localhost:3307", "root", "", "mobile_store");


if(!$connection){
    echo("فشل الاتصال بقاعده البيانات");
}
?>