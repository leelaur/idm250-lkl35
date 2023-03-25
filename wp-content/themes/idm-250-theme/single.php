<?php get_header(); ?>
<?php get_template_part('components/hero');?>
<div class="content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="content">
     <?php get_template_part('components/content');?>
</div>
    </article>
</div>



<br>
<br>


<div class="bottom-space"></div>
<?php get_footer(); ?>