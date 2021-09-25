<?php
require_once "./config/config.php";
// users project info 
$sql = "SELECT * FROM projects";
$results = mysqli_query($con, $sql);
$rows = mysqli_fetch_all($results, MYSQLI_ASSOC);
mysqli_free_result($results);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peter Full-Stack Developer.</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="./include/styles.css" />
</head>
<body>
    <div class="container-fluid all shadow-lg">
        <nav style="border-radius: 50px;background-color: #211C31;" class="navbar sticky-top navbar-expand-md shadow-lg navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand p-3" href="./" style="border:1px solid grey;border-radius:999px; font-family:Lucida Handwriting, Tahoma, Serif;">Full-stack Developer</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./#about">About ME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger btn-rounded" href="./#contact">Contact Me.</a>
                </li>
                </ul>
            </div>
        </nav>

        <header class="mt-3 p-5">
            <h1 class="text-center text-white">Portfolio.</h1>
        </header>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col">
                <div class="card">
                        <div class="card-header text-center">
                            <img src="./include/portfolio.png" style="border-radius:50px;" alt="peter" width="310px" />
                            <h3>Standard Portfolio.</h3>
                            
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                                This is a Portfolio site developed with php, html, css, Bootstraps and JavaScript.
                                It's a standard Portfolio with Admin section for Adding all your Informations needed and also you can also update your portfolio. 
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="https://programmingdroid.xyz/portfolio" class="btn btn-rounded-circle btn-block mx-auto d-block btn-outline-warning">View.</a>
                        </div>
                    </div>
                </div>
                <?php foreach($rows as $row): ?>
                <div class="col"> 
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="./include/<?php echo $row['img'];?>" style="border-radius:50px;" alt="<?php echo $row['img'];?>" width="310px" />
                            <h3><?php echo $row['title'];?>.</h3>
                            <small class="text-secondary ml-auto"><?php echo $row['date'];?></small>
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                            <?php echo $row['description'];?> 
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo $row['link'];?>" class="btn btn-rounded btn-block mx-auto d-block btn-outline-warning">View.</a>
                        </div>
                    </div>  
                </div>
                <?php endforeach;?>
            </div>
        </div>

        <footer class="text-center text-warning mt-5">
            <p>Copyright &copy;2021 | Peter (Programming Droid) </p>
        </footer>

    </div>


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>