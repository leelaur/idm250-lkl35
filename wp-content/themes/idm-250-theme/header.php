<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDM Theme Version 1</title>

    <link rel="stylesheet" href="/wp-content/themes/idm-250-theme/dist/styles/main.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header> 
    <p> LOGO GOES HERE </p>
    <nav>
        <?php

        wp_nav_menu (['theme_location' => 'primary-menu']);

        ?>
 