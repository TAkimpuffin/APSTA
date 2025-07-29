<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/site.webmanifest">
  <title><?php echo get_bloginfo('name') . ' | ' . get_the_title(); ?> </title>
  <script src="https://kit.fontawesome.com/a60028137b.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
</head>

<body>

  <body>
    <div class="container container--black pad__small--vert header__wrapper">
      <div class="container__inner header">

        <div class="header__logo">
          <?php $logo = get_field('header_logo', 'options'); ?>
          <a href="<?php echo get_bloginfo('url'); ?>"> <img src="<?php echo $logo['url']; ?>"
              alt="<?php echo $logo['alt']; ?>">
          </a>
        </div>

        <div class="header__toggle nav__toggle">
          <span></span><span></span><span></span>
        </div>

        <nav class="nav header__nav">
          <div class="nav__container">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => 'nav__wrapper',
              'container_class' => 'nav',
              'menu_class' => 'nav__nav',
            ));
            ?>
            <ul class="nav__shop">
              <li><a class="btn" href="/categories">Enter Now</a></li>
              <li class="nav__cart"><a href="/checkout"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
          </div>
        </nav>

        <!-- <nav class="navmob header__navmob">
          <?php
          // wp_nav_menu(array(
          //   'theme_location' => 'primary',
          //   'container' => 'navmob__wrapper',
          //   'container_class' => 'navmob',
          //   'menu_class' => 'nav__navmob',
          // ));
          ?>

          <div class="navmob__shop">
            <ul>
              <li><a href="/categories">Enter Now</a></li>
              <li><a href="/checkout"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
          </div>
        </nav> -->
      </div>
    </div>