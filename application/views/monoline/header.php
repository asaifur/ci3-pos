<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Monoline - Design Agency HTML Template">
  <meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup ">
  <!-- SITE TITLE -->
  <title><?= $domain->title; ?></title>
  <!-- Latest Bootstrap min CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>bootstrap/css/bootstrap.min.css">
  <!-- Google Font -->
  <?php if (!empty($domain->meta_google_site_verification)) : ?>
    <meta name="google-site-verification" content="<?= $domain->meta_google_site_verification; ?>">
  <?php endif; ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>fonts/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>fonts/themify-icons.css">
  <!--- owl carousel Css-->
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>owlcarousel/css/owl.carousel.css">
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>owlcarousel/css/owl.theme.css">
  <!--materialdesignicons Css-->
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>css/fonts.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>css/animate.css">
  <!-- Venobox CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>css/venobox.css">
  <!-- MAGNIFIC CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>css/magnific-popup.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>css/menu.css">
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>css/slider.css">
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/monoline/assets/') ?>css/responsive.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>