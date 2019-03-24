<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Evenkia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
</head>
<body>
    <?php
        include("connect/check_is_connected.php");
        check_is_connected();
        $msg_err = '<div class="alert alert-danger alert-dismissible" style="margin-bottom:0px;"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>';
        include('navbar.php');
        $array_err = array('empty', 'username', 'email', 'password', 'long');
        $array_msg = array('Un des champs est vide', 'Pseudo déjà utilisé', 'Email déjà utilisé', 'Les mots de passe de correspondent pas', 'Un des champs est trop long');
        if (isset($_GET['error'])) {
            for ($i = 0; $array_err[$i]; $i++) {
                if ($array_err[$i] == $_GET['error']) {
                    echo $msg_err.$array_msg[$i].'</strong></div>';
                    break;
                }
            }
        }
    ?>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <form method="post" action="connect/register_request">
    <div class="form-group">
            <label for="name">Pseudo:</label>
            <input type="name" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="email">Adresse mail:</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="form-control" name="pwd">
        </div>
        <div class="form-group">
            <label for="confirm_pwd">Mot de passe (confirmation):</label>
            <input type="password" class="form-control" name="confirm_pwd">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    </div>
      </div>
    <?php
        include("footer.php");
    ?>  
</body>
</html>
