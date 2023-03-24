<?php get_header(); ?>
<?php get_template_part('components/hero');?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php get_template_part('components/sidebar');?>
<?php get_template_part('components/content');?>



</article>


<div class="bottom-space"></div>
<?php get_footer(); ?>