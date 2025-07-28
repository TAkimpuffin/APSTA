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
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
</head>

<body>

    <body>

    <div class="container container--white pad__small--vert">
        <div class="container__inner preheader__landing preheader">

        </div>
    </div>
        <div class="container container--TABlue pad__small--vert header__wrapper">
            <div class="container__inner header cols">
                <div class=" cols--1of3 header__logo">
                    <?php $logo = get_field('header_logo_landing', 'options'); ?>
                    <a href="<?php echo get_bloginfo('url'); ?>"> <img src="<?php echo $logo['url']; ?>"
                            alt="<?php echo $logo['alt']; ?>">
                    </a>
                </div>
                <div class="cols--2of3 header__landingtext">
                    <h2>
                        Please select your desired region...
                    </h2>
                </div>
            </div>
        </div>