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
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle Publikationen</title>
    <link rel="stylesheet" href="css/pub_erfassen.css">


  </head>
  <body>


<?php while($post = mysqli_fetch_array($post_list)) { ?>

    <div class="container">
      <form id="contact" action="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      <div>
        <form  class="form-inline" method="post" action="home.php">
          <div class="col-xs-10">
            <div class="panel panel-default p42panel">
              <div class="panel-heading">

                </button>


                <h3 class="panel-title"><?php echo $post ['firstname'];?> </h3>
                <h3 class="panel-title"><?php echo $post ['lastname']; ?></h3>
                <h3 class="panel-title"><?php echo $post ['pubname']; ?></h3>
                <h3 class="panel-title"><?php echo $post ['pubplace']; ?></h3>
                <h3 class="panel-title"><?php echo $post ['pubpage']; ?></h3>
              </div>
              <div class="panel-body">
                <p><?php echo $post ['date']; ?></p>
              </div>

            </div>
          </div><!-- /col-sm-10 -->
        </form>
      </div>
        </div>

        <?php } ?>









        <div class="container">
          <form id="contact" action="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

          <div>
            <form  class="form-inline" method="post" action="home.php">
              <div class="col-xs-10">
                <div class="panel panel-default p42panel">
                  <div class="panel-heading">

                    </button>
                    <h3 class="panel-title">Vorname Nachname</h3>
                    <h3 class="panel-title">Name Publikation</h3>
                    <h3 class="panel-title">Publikationsort</h3>
                    <h3 class="panel-title">Datum</h3>
                    <h3 class="panel-title">Seitenzahl</h3>
                  </div>
                  <div class="panel-body">
                    <p>test</p>
                  </div>

                </div>
              </div><!-- /col-sm-10 -->
            </form>
          </div>
            </div>






  </head>
  <body>
    <!-- Titel-->

  </body>
</html>
