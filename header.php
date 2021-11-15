<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Index</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">WEBSITE</a>
              <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <?php
                if (isset($_SESSION["useruid"])){
                    echo '<li class="nav-item"><a class="nav-link" href="index.php">Profile page</a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="includes/logout.inc.php">Log out</a></li>';
                }
                else{
                    echo '<li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>';

                }
                ?>
            </ul>
        </div>
    </div>
</nav>