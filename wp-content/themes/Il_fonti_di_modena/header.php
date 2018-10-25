<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initialscale=
1">
<title><?php bloginfo('name'); ?></title>
  <!--  inicio de Barra -->
<nav class="navbar">
  <a class="navbar-brand" href="#">
    <img src="<?php echo get_theme_file_uri('/assets/img/marca/logo.png'); ?>"   height="50" alt="il fonti di modena">
  </a>
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active text-light" href="#">Casa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="#">Platos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="#">Carta</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="#">Reserva</a>
  </li>
</ul>
</nav> <!-- termino barra-->
<?php wp_head() ?>
</head>
<body>
