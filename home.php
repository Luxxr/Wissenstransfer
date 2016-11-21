<?php
  session_start();
  if(!isset($_SESSION['id'])){
    header("Location:index.php");
  }else{
    $user_id = $_SESSION['id'];
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  hallo ciao
</head>
