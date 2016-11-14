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
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">p42</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="profil.php">Profil</a></li>
          <li><a href="friends.php">Freunde finden</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Logout</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav><!-- /Navigation -->

  <div class="container">
    <div class="row">
      <div class="col-md-8"> <!-- Hauptinhalt -->

        <!-- Post hinzufügen -->
        <div class="row">
          <div class="col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Was machst du gerade?</div>
              <div class="panel-body">
                <form enctype="multipart/form-data" method="post" action="home.php">
                  <fieldset class="form-group">
                    <textarea class="form-control" rows="3" name="posttext"></textarea>
                  </fieldset>
                  <div class="collapse" id="upload_container">
                    <div class="well">
                        <input type="file" name="post_img" id="post_img">
                    </div>
                  </div>
                  <a class="btn btn-default" role="button" data-toggle="collapse" href="#upload_container" aria-expanded="false" aria-controls="collapseExample">
                    Bild hinzufügen
                  </a>
                  <button type="submit" name="post-submit" class="btn btn-primary">posten</button>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- /Post hinzufügen -->

        <!-- Beitrag -->
          <div class="row">
            <div class="col-xs-2">
              <div class="thumbnail p42thumbnail">
                <img src="user_img/0_default_user_image.png" alt="profilbildBock" class="img-responsive">
              </div><!-- /thumbnail p42thumbnail -->
            </div><!-- /col-sm-2 -->

            <form  class="form-inline" method="post" action="home.php">
              <div class="col-xs-10">
                <div class="panel panel-default p42panel">
                  <div class="panel-heading">
                    <button type="submit" class="close" name="post_delete" value="19">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="panel-title">Wolfgang Bock</h3>
                  </div>
                  <div class="panel-body">
                    <p>Ein Test</p>
                  </div>
                  <div class="panel-footer text-right small">
                    <small><a class="text-muted" href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a></small>
                  </div>
                </div>
              </div><!-- /col-sm-10 -->
            </form>
          </div> <!-- /Beitrag -->

        <!-- Beitrag -->
          <div class="row">
            <div class="col-xs-2">
              <div class="thumbnail p42thumbnail">
                <img src="user_img/0_default_user_image.png" alt="profilbildBock" class="img-responsive">
              </div><!-- /thumbnail p42thumbnail -->
            </div><!-- /col-sm-2 -->

            <form  class="form-inline" method="post" action="home.php">
              <div class="col-xs-10">
                <div class="panel panel-default p42panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Urs Thöny</h3>
                  </div>
                  <div class="panel-body">
                    <p>Ein Test mit Bild und ohne Löschen-Butten</p>
                    <img src="post_img/beispiel.jpg" alt="postimage" class="img-responsive">
                  </div>
                  <div class="panel-footer text-right">
                    <small><a class="text-muted" href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a></small>
                  </div>
                </div>
              </div><!-- /col-sm-10 -->
            </form>
          </div> <!-- /Beitrag -->
      </div> <!-- /Hauptinhalt -->

      <!-- Seitenleiste -->
      <div class="col-md-4">
        <!-- Userliste -->
        <div class="panel panel-default">
          <div class="panel-heading">Meine Freunde</div>
          <div class="panel-body">
            <form method="post" action="home.php" >
            <!-- User als Freund hinzufügen -->
              <div class="form-group row p42-form-group">
                <input type="checkbox" name="del_friends[]" id="userid9" autocomplete="off" value="9" />
                <div class="btn-group col-xs-12">
                  <label for="userid9" class="btn btn-default col-xs-2 col-sm-1 col-md-2">
                    <span class="glyphicon glyphicon-minus"></span>
                    <span> </span>
                  </label>
                  <label for="userid9" class="btn btn-default active col-xs-10 col-sm-11 col-md-10">
                      Urs Thöny
                  </label>
                </div>
              </div> <!-- /User als Freund hinzufügen -->
              <input type="submit" class="btn btn-default" value="aus Freundesliste entfernen" />
            </form>
          </div>
        </div> <!-- /Userliste -->
      </div> <!-- /Seitenleiste -->
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
