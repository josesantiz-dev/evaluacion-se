<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $data['page_tag']; ?></title>
	<link rel="shortcut icon" href="<?= media();?>/images/icons/icon-48x48.png" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo media(); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo media(); ?>/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo media(); ?>/css/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo media(); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo media(); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<?php require_once("nav_admin.php"); ?>