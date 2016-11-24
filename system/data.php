<?php

 function get_db_connection()
{
  $db = mysqli_connect('localhost', '861288_1_1', 'u7wqnSfU6Hy3', '861288_1_1')
    or die('Fehler beim Verbinden mit dem Datenbankserver.');
  mysqli_set_charset($db, "utf8");
  return $db;
}

function get_result($sql)
{
  $db = get_db_connection();
  echo $sql;
  $result = mysqli_query($db, $sql);
  mysqli_close($db);
  return $result;
}

/* ***************************** */
/* Login index.php
/* ***************************** */

function login($email, $password)
{
  $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password';";
  return get_result($sql);
}


/* ***************************** */
/* pub_erfassen.php
/* ***************************** */

function write_post($firstname, $surname, $pubname, $pubplace, $date, $pubpage, $owner  )
{
  $sql = "INSERT INTO posts (firstname, surname, pubname, pubplace, date, pubpage, owner) VALUES ('$firstname', '$surname', '$pubname', '$pubplace', '$date', '$pubpage', $owner);";
  return get_result($sql);
}

function get_posts($user_id)
{
  $sql = "SELECT * FROM posts p, user u WHERE p.owner = $user_id AND u.user_id = $user_id;";
  return get_result($sql);
}

?>
