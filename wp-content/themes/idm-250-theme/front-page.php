<?php get_header();?>

<div class="hero">
    <div class="subtitle">
    <h1 class="title"><?php echo get_the_title(); ?></h1>
        <p> This is my front page! <p>
    </div>
</div>

<div class="divider"></div>

<!-- grid -->
<div class="parent">
<div class="mini-hero mini-hero1"> </div>
<div class="mini-hero mini-hero2"> </div>
<div class="mini-hero mini-hero3"> </div>
<div class="mini-hero mini-hero4"> </div>
<div class="mini-hero mini-hero5"> </div>
<div class="mini-hero mini-hero6"> </div>
</div>

<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>

<?php get_template_part('component/content');?>

<?php get_footer(); ?>

