<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo get_the_title(); ?> | Excel CPR</title>
    <link rel="icon" type="image/x-icon" href="dist/images/favicon.ico">
   <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<?php 
wp_body_open(); 
get_template_part('components/header');
?>

