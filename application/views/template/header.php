<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--BAGIAN 1 NOMOR 3.1 JOBSHEET 4-->
    <style>
    .badge{
      margin-left:3px;
    }
    </style>

    <!--<title>Hello, world!</title>-->
    <title><?= $title ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      
      <!--<a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>-->

      <a class="nav-item nav-link" href="<?= base_url(); ?>Mahasiswa">Data Mahasiswa</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>">About</a>
      <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
    </div>
  </div>
</nav>