<?php
session_start () ;
$_SESSION ['isAdmin' ]=0;
session_destroy () ;
header("Location:admin_login.php");


?>