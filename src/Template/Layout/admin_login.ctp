<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon -->
    
    <link rel="icon" href="<?php echo $this->Url->build('/backend/login/images/favicon.ico'); ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/login/fonts/icomoon/style.css'); ?>">

    <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/login/css/owl.carousel.min.css'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/login/css/bootstrap.min.css'); ?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/login/css/style.css'); ?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Supermarket Login</title>
  </head>
  <body>
   <?= $this->fetch('content') ?>
    <script src="<?php echo $this->Url->build('/backend/login/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo $this->Url->build('/backend/login/js/popper.min.js'); ?>"></script>
    <script src="<?php echo $this->Url->build('/backend/login/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo $this->Url->build('/backend/login/js/main.js'); ?>"></script>
  </body>
</html>