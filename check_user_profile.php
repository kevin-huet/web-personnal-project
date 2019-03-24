<?php
    include('database_connect.php');
    function print_profile_page() {
        $user = $_GET['user'];
        if ($_SESSION['name'] == NULL && $user == NULL)
            return ("not found");
        if ($_SESSION['name'] == $user)
            return ("my profile");
        if ($user != NULL) {
            $link = connect();
            $request = mysqli_query($link, "SELECT username FROM users WHERE username = '".$user."'");
            $link->close();
            sleep(0.5);
            if (mysqli_num_rows($request) == 0)
                return ("not found");
            return ("user profile");
        }
        if ($_SESSION['name'] != NULL && $user == NULL)
            return ("my profile");
    }
    
    function print_pofile() {
        $result = print_profile_page();
        if ($result === "not found") {
            echo '<div class="card" style="width:400px">
                <h4>Cet utilisateur est itrouvable</h4>
            </div>';
        }
        if ($result === "my profile") {
            $link = connect();
            $request = mysqli_query($link, "SELECT grade, status FROM users WHERE username = '".$_SESSION['name']."'");
            $link->close();
            $row = mysqli_fetch_assoc($request);
            $grade = $row['grade'];
            $status = $row['status'];
            echo '<div style="display: flex; justify-content: center;">
            <div class="card" style="width:400px">
            <img class="card-img-top" src="users/'.$_SESSION['name'].'/avatar.jpg?time='.time().'" alt="">
            <div class="card-body">
            <h4 class="card-title">'.$_SESSION['name'].'</h4>
            <form method="post" action="connect/change_description_profile.php">
            <div class="form-group">
                    <label for="desc"></label>
                    <input type="text" class="form-control" name="desc" value="'.$status.'">
                </div>
            </form>
            <form method="post" action="get_project_request.php" enctype="multipart/form-data">
            <div>
            <p> Image de profil :<br />
            <input type="file" name="image" />
            <input type="submit" class="btn btn-primary"/>
            </div>
            </form>
            </div>
            </div>
            <div class="card" style="width:400px">
            <div class="card-body">
            </div>
            </div>
            </div>';
        }
        if ($result === "user profile") {
            $link = connect();
            $request = mysqli_query($link, "SELECT grade, status FROM users WHERE username = '".$_SESSION['name']."'");
            $link->close();
            $row = mysqli_fetch_assoc($request);
            $grade = $row['grade'];
            $status = $row['status'];
            echo '<div class="card" style="width:400px">
            <img class="card-img-top" src="users/'.$_GET['user'].'/avatar.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">'.$_GET['user'].'</h4>
            <p class="card-text">'.$status.'</p>
            </div>
            </div>';
        }
    }
?>
