<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul; ?></title>
    <link href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Residfom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url()?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('warga')?>">Warga</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('fasilitas')?>">Fasilitas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('masjid')?>">Kas Masjid</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>