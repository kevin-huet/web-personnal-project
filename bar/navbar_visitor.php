<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Logo -->
        <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">

    <a class="navbar-brand" href="/">EpiHub</a>
        <!-- Liens -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Lien 1</a>
        </li>    
          <!-- menu deroulant -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Connexion / Inscription
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php $_SERVER['HTTP_HOST'] ?>/register">S'inscrire</a>
                <a class="dropdown-item" href="<?php $_SERVER['HTTP_HOST'] ?>/login">Connexion</a>
            </div>
        </li>
        </ul>
    </div>
</nav>