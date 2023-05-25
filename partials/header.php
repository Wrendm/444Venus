<?php include('admin/config/constants.php')?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>444 VENUS</title>
    <link href="taylore.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <header class="p-3 mb-3 text-bg-dark">
      <div class="container-fluid flex-wrap text-center">
        <div class="row justify-content-between">
          <div class="col-4 text-start align-self-center">
            <ul class="nav list-group-horizontal">
                <!--TODO: Add dropdown menu for categories -->
              <li><a href="/444Venus/index.php" class="nav-link px-2 primary-text">Home</a></li>
              <!-- WHERE active="yes" -->
              <li><a href="/444Venus/available.php" class="nav-link px-2 primary-text">Available</a></li>
              <!-- WHERE active="no" --> 
              <li><a href="/444Venus/past.php" class="nav-link px-2 primary-text">Past Work</a></li>     
              <li><a href="/444Venus/about.php" class="nav-link px-2 primary-text">About</a></li>
            </ul>
          </div>
          <div class="col-4 align-self-center">
            <h1>444VENUS</h1>
          </div>
          <div class="col-4 text-end align-self-center">
            <button type="button" class="btn btn-primary primary-text me-2">Contact</button>
          </div>
        </div>
      </div>
    </header>