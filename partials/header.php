<?php include('admin/config/constants.php')?>
<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>444 VENUS</title>
    <link href="taylore.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer/">
  </head>
  <body class="d-flex flex-column h-100">
    <header class="p-3 mb-3 text-bg-dark">
      <div class="container-fluid flex-wrap text-center">
        <div class="row justify-content-between">
          <div class="col-4 text-start align-self-center">
            <ul class="nav list-group-horizontal">
                <!--TODO: Add dropdown menu for categories -->
              <li><a href="/444Venus/index.php" class="nav-link px-2 primary-text">Home</a></li>
              <li><a href="/444Venus/filter.php?available=1" class="nav-link px-2 primary-text">Available</a></li>
              <li><a href="/444Venus/filter.php?available=0" class="nav-link px-2 primary-text">Past Work</a></li>     
              <li><a href="/444Venus/about.php" class="nav-link px-2 primary-text">About</a></li>
            </ul>
          </div>
          <div class="col-4 align-self-center">
            <h1>444VENUS</h1>
          </div>
          <div class="col-4 text-end align-self-center">
            <button type="button" class="btn btn-primary primary-text me-2"><a href="/444Venus/contactform.php"> Contact </a></button>
          </div>
        </div>
      </div>
    </header>