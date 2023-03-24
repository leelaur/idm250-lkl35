<?php get_header();?>

<div class="home">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('components/content');?>
</article>
</div>

<?php get_template_part('components/grid');?>


<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>

<?php get_template_part('component/content');?>

<?php get_footer(); ?>

