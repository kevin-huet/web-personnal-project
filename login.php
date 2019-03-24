<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>EpiHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <?php
      include('connect/check_is_connected.php');
      check_is_connected();
      $msg_err = '<div class="alert alert-danger alert-dismissible" style="margin-bottom:0px;"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>';
      $msg_success = '<div class="alert alert-success alert-dismissible" style="margin-bottom:0px;"><button type="button" class="close" data-dismiss="alert">&times;</button>Inscription Réussie - Vous pouvez vous connecter<strong></strong></div>';
      include('navbar.php');
      $array_err = array('empty', 'incorrect');
      $array_msg = array('Un des champs est vide', 'Mot de passe ou email incorrect');
      if (isset($_GET['error'])) {
          for ($i = 0; $array_err[$i]; $i++) {
              if ($array_err[$i] == $_GET['error']) {
                  echo $msg_err.$array_msg[$i].'</strong></div>';
                  break;
              } else if ($_GET['error'] == "success") {
                  echo $msg_success;
                  break;
              }
          }
      }
    ?>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        
    <form method="post" action="connect/getlogin">
        <div class="form-group">
            <label for="email">Adresse mail:</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="form-control" name="pwd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Se souvenir de moi
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
    </div>
      </div>
    <?php
        include("footer.php");
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
</body>
</html>
