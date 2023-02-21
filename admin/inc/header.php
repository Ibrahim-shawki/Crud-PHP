<?php

  if(!isset($_SESSION['admin_name'])){
    header("location:".BURLA.'login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luca System</title>
    <!-- Bootstrap && CSS -->
    <link rel="stylesheet" href="<?= ASSETS;?>/css/bootstrap.min.css">
    <!-- Font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
       <!-- Navbar Section -->
<nav class="navbar navbar-expand-lg bg-dark d-flex p-3">
  <div class="container-fluid ">
    <a class="navbar-brand text-primary" href="#">Luca </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="<?php echo BURLA?>">Home</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cities
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo BURLA.'cities/add.php'; ?>">Add</a></li>
            <li><a class="dropdown-item" href="<?php echo BURLA.'cities/index.php';?>">View All</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo BURLA.'services/add.php'; ?>">Add</a></li>
            <li><a class="dropdown-item" href="<?php echo BURLA.'services/index.php';?>">View All</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admins
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo BURLA.'admins/add.php' ;?>">Add</a></li>
            <li><a class="dropdown-item" href="<?php echo BURLA.'admins/index.php';?>">View All</a></li>
          </ul>
        </li>   

      </ul>
      <a href="<?php echo BURLA.'logout.php'; ?>"><button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Logout</button></a>

    </div>

  </div>
</nav>
 