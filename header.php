<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description');?>">
  <title>Open Heart Reiki</title>
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <!--[if lt IE 9]> <script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js"></script> <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="page-header">
    <div class="page-nav">
      <!-- LEFT NAV -->
      <nav class="left nav">
        <ul>
          <li class="about"><a href="about.php">about</a></li>
          <li class="services"><a href="services.php">services</a></li>
        </ul>
      </nav>
      <!-- NAV LOGO -->
      <div class="logo">
        <a href="index.php">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-final.png" alt="Open Heart Reiki">
        </a>
      </div>
      <!-- RIGHT NAV -->
      <nav class="right nav">
        <ul>
          <li class="blog"><a href="blog.php">blog</a></li>
          <li class="contact"><a href="contact.php">contact</a></li>
        </ul>
      </nav>
      <!-- DROPDOWN MENU -->
      <div class="menu" onClick="showDropdown()">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <p>menu</p>
      </div>
    </div>
    <div class="dropdown nav">
      <nav>
        <ul>
          <li class="about"><a href="about.php">about</a></li>
          <li class="services"><a href="services.php">services</a></li>
          <li class="blog"><a href="blog.php">blog</a></li>
          <li class="contact"><a href="contact.php">contact</a></li>
        </ul>
      </nav>
    </div>
    <!-- RESPONSIVE MENU -->
    <!-- <div class="title-bar" data-responsive-toggle="menu" data-hide-for="medium">
      <div class="menu btn">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
      </div>
      <div class="logo">
        <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-final.png" alt="Open Heart Reiki"></a>
      </div>
    </div> -->
    <!-- NAV MENU -->
    <!-- <nav id="menu" class="top-bar"> -->
      <!-- Logo -->
    <!--  <div class="logo-wrapper hide-for-small-only">
        <div class="logo">
          <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-final.png" alt="Open Heart Reiki"></a>
        </div>
      </div> -->
      <!-- LEFT NAV -->
    <!--  <div class="top-bar-left">
        <ul class="vertical small-horizontal medium-horizontal menu">
          <li class="about"><a href="about.php">about</a></li>
          <li class="services"><a href="services.php">services</a></li>
        </ul>
      </div> -->
      <!-- RIGHT NAV -->
      <!-- <div class="top-bar-right">
        <ul class="vertical small-horizontal medium-horizontal menu">
          <li class="blog"><a href="blog.php">blog</a></li>
          <li class="contact"><a href="contact.php">contact</a></li>
        </ul>
      </div>
    </nav> -->
  </header>