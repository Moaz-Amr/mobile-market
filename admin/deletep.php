<?php
include'../inc_db/db.php';

session_start();
if($_SESSION['isAdmin']==1){
  
  include'../inc_db/db.php';

  
  $id=(int) $_GET ['id' ] ;
  $sql="delete from items where id='$id'";
  $ret=mysqli_query ($connection, $sql);
  if ($ret)
   {
      echo "<script>window.location.href='show_items.php';</script>";
    }
  
}
else
header("Location:admin_login.php");

?>
