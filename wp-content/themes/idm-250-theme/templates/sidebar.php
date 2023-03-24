<?php

/* Template Name: Sidebar */

// good for: Contact Pages
// can also be named templates-sidebar.php

// <!-- For all other pages on your site -->
 get_header();?>

<!-- Gets the title of the page and puts it on the page -->
<div class="" data-component="sidebar-template">
<?php get_template_part('components/content');?>


<?php get_template_part('components/sidebar'); ?>

<?php get_footer(); ?>
