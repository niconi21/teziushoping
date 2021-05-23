<?php

$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';

$domain = $_SERVER['HTTP_HOST'];
$host= $protocol.$domain.'/teziushoping/app/public/';

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="../../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/styles.css">
  <script src="../../assets/bootstrap-4.5.3-dist/js/popper.min.js"></script>
<script src="../../assets/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>