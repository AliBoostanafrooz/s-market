<!doctype html>

<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?php echo base_url('Assets/css/bootstrap.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('Assets/css/bootstrap-grid.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('Assets/css/bootstrap-reboot.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('Assets/css/smarket.css'); ?>" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="<?php echo base_url('Assets/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('Assets/js/bootstrap.bundle.js'); ?>"></script>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top smarket-na">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation ">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="<?php echo base_url(); ?> ">مارکت اندرویدی</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ul-margin-right">
            <li class="nav-item active">
                <a class="nav-link" href="#">صفحه اصلی <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('display/about'); ?>">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">دانلود</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="جستجو" aria-label="Search">
        </form>

        <?php if ($this->session->userdata('logged_in') != 1) { ?>

        <div class="dropdown ">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                ورود
            </button>
            <div class="dropdown-menu" aria - labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo base_url('user/login'); ?>"> ورود کاربر </a>
                <a class="dropdown-item" href="<?php echo base_url('developer/login'); ?>"> ورود توسعه دهنده </a>
            </div>
            <?php } elseif ($this->session->userdata('logged_in') == 1) {
                ?>

                <a href="<?php echo base_url('user/logout')?>  " class="btn btn-primary"> خروج</a>

            <?php } ?>
        </div>
    </div>
</nav>
<div class="container s-container">

