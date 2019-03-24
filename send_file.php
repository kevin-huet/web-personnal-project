<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>EpiHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
    <script src="main.js"></script>
</head>
<body>
    <?php
      include('navbar.php'); 
    ?>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        
    <form method="post" action="../BackEnd/get_project_request.php" enctype="multipart/form-data">
        <div>
            <p>
                Formulaire :<br />
                <input type="file" name="image" />
         <input type="submit"/>
        </form>
        </div>
    </form>
    </div>
      </div>
    <?php
      include('footer.php');
    ?>  
</body>
</html>