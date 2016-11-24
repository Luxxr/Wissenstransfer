<!DOCTYPE html>
<html lang="en">

<!-- Logout Button -->

  <form action="index.php" method="post" class="button">
        <input name="return" type="hidden" align="right" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
        <input type="submit" value="Logout" />
  </form>


<head>
  <title>Optionen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="optionen.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="uberschrift">
    <h1>Startseite</h1>
  </div>
<div class="umrandung"></div>
<div class="umrandung">
<div class="buttons">
<div class="content">
  <a href="pub_meine.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-folder-open"></span> Publikationen</a>
  <a href="pub_erfassen.php" class="btn btn-info btn-lg" ><span class="glyphicon glyphicon-edit"></span> Publikation erfassen</button>
  <a href="#" class="btn btn-lg btn-danger" disabled="disabled"><span class="glyphicon glyphicon-lock"></span> Privat</a>
</div>
</div>
</div>
</body>
</html>
