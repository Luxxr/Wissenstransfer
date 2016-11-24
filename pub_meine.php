<?php

session_start();
 if(!isset($_SESSION['id'])){
   header("Location:index.php");
 }else{
   $user_id = $_SESSION['id'];
 }

 require_once('system/data.php');
 require_once('system/security.php');



$post_list = get_posts($user_id);



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>p42 - Home</title>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="css/p42_style.css">

</head>

<body>

  <?php while($post = mysqli_fetch_array($post_list)) { ?>


<!-- Beitrag -->

    <form  class="form-inline" method="post" action="home.php">
      <div class="col-xs-10">
        <div class="panel panel-default p42panel">
          <div class="panel-heading">

            </button>
            <h3 class="panel-title"><?php echo $post ['firstname']; echo $post ['lastname'] ?></h3>
          </div>
          <div class="panel-body">
            <p><?php echo $post ['pubname']; echo $post ['pubplace']; echo $post ['date']; echo $post ['pubpage'];?></p>
          </div>

        </div>
      </div><!-- /col-sm-10 -->
    </form>
  </div> <!-- /Beitrag -->

<?php } ?>

<!-- Beitrag -->

    <form  class="form-inline" method="post" action="home.php">
      <div class="col-xs-10">
        <div class="panel panel-default p42panel">
          <div class="panel-heading">

            </button>
            <h3 class="panel-title">Test 1</h3>
          </div>
          <div class="panel-body">
            <p>test</p>
          </div>

        </div>
      </div><!-- /col-sm-10 -->
    </form>
  </div> <!-- /Beitrag -->


</body>
