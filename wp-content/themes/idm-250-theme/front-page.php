<?php get_header();?>

<div class="main-hero">
    <div class="hero-content">
    <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p> This is my front page! <p>
    </div>
</div>

<div class="divider"></div>
<?php get_template_part('components/grid');?>


<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>

<?php get_template_part('component/content');?>

<?php get_footer(); ?>

