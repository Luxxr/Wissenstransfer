<?php
session_start();
 if(!isset($_SESSION['id'])){
   header("Location:index.php");
 }else{
   $user_id = $_SESSION['id'];
 }

 require_once('system/data.php');
 require_once('system/security.php');

 $error = false;
 $error_msg="";
 $success = false;
 $success_msg = "";

echo "Step1";
 if(isset($_POST['write_submit'])){
   echo "Step2";

   If(empty($_POST['firstname'])){
     $error = true;
     $error_msg .= "kein Vorname<br>";
   }else{
     $firstname = filter_data($_POST['firstname']);
   }

   If(empty($_POST['surname'])){
     $error = true;
     $error_msg .= "kein Nachname<br>";
   }else{
     $surname = filter_data($_POST['surname']);
   }

   If(empty($_POST['pubname'])){
     $error = true;
     $error_msg .= "kein Publikationstitel<br>";
   }else{
     $pubname = filter_data($_POST['pubname']);
   }

   If(empty($_POST['pubplace'])){
     $error = true;
     $error_msg .= "kein Publikationsort<br>";
   }else{
     $pubplace = filter_data($_POST['pubplace']);
   }

   If(empty($_POST['date'])){
     $error = true;
     $error_msg .= "kein Datum<br>";
   }else{
     $date = filter_data($_POST['date']);
   }

   If(empty($_POST['pubpage'])){
     $error = true;
     $error_msg .= "keine Seitenzahl<br>";
   }else{
     $pubpage = filter_data($_POST['pubpage']);
   }


  /*  if(!empty($_POST['firstname']) && !empty($_POST['surname'])
    && !empty($_POST['pubname']) && !empty($_POST['pubplace']) && !empty($_POST['date'])
    && !empty($_POST['pubpage']) ){
      $firstname = filter_data($_POST['firstname']);
      $surname = filter_data($_POST['surname']);
      $pubname = filter_data($_POST['pubname']);
      $pubplace = filter_data($_POST['pubplace']);
      $date = filter_data($_POST['date']);
      $pubpage = filter_data($_POST['pubpage']);
      $result = write_post($firstname, $surname, $pubname, $pubplace, $date, $pubpage, $user_id);
    } */

    if(!$error){
      $result = write_post($firstname, $surname, $pubname, $pubplace, $date, $pubpage, $user_id);
    }else{
      echo $error_msg;
    }
  }


if(isset($_POST['submit'])){
     if(!empty($_POST['name-test'])){
    }
  }




 ?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The asbove 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Wissenstransfer - Home</title>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="css/pub_erfassen.css">

</head>
<body>
  <div class="container">
    <form id="contact" action="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <h3>Publikation erfassen</h3>

      <fieldset>
        <select>
          <option value="Referat">Referat</option>
          <option value="Artikel">Artikel</option>
          <option value="Radiobeitrag">Radiobeitrag</option>
          <option value="Konferenz">Konferenz</option>
          <option value="Blogbeitrag">Blogbeitrag</option>
        </select>
      </fieldset>




      <fieldset>
        <input placeholder="Vorname" type="text" name="firstname" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Nachname" type="text" name="surname" tabindex="2" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Name / Titel Publikation" name="pubname"type="text" tabindex="3" required>
      </fieldset>
      <fieldset>
        <input placeholder="Publikations Ort" type="text" name="pubplace" tabindex="4" required>
      </fieldset>
      <fieldset>
        <input placeholder="Erscheinungsdatum (dd/mm/yyyy)" name="date" type="text" tabindex="5" required>
      </fieldset>
      <fieldset>
        <input placeholder="Seitenzahl" type="text" name="pubpage" tabindex="6" required>
      </fieldset>

      <fieldset>
        <button name="write_submit" type="submit" id="contact-submit" data-submit="...Sending">Speichern!</button>
      </fieldset>

      <p id="demo"></p>

      <script>
      function myFunction() {
          var x;
          if (confirm("Ihre Publikation wurde erfasst!") == true)
          document.getElementById("demo").innerHTML = x;

      }
      </script>


    </form>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
