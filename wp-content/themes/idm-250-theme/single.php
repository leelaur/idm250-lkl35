<?php get_header(); ?>
<?php get_template_part('components/title');?>

<section>
    <div>
        <img src="dist/images/family-and-friends-book2.jpg" alt="Family and Friends book"/>
    </div>
    <div>
        <h3> Course Description </h3>
        This CPR certification course is designed to provide participants with the knowledge and skills needed to perform CPR (Cardiopulmonary Resuscitation) in emergency situations. CPR is a critical technique that can help save the life of someone who is not breathing or whose heart has stopped.
    </div>
</section>
<section>
    <h3> Course Content </h3>
    <ul>
        <li>List one</li>
        <li>List two</li>
        <li>List three</li>
        <li>List four</li>
    </ul>
</section>
<section>
    <h3> How it works </h3> 
    <div class="two-part">
        <div>
            <h5> Part 1:</h5>
            <p>
                Select and complete the AHA   Heartsaver®  Online learning module. It  has a personalized adaptive algorithm and is self-directed learning. After completion of the online course, print Certificate of Online Course Completion and   email us  a copy. You can proceed to Part 2 Skills Session, a hands-on skills practice/test appointment.
            </p>
        </div>
        <div>
            <h5> Part 2:</h5>
            <p>
                Select and complete the AHA   Heartsaver®  Online learning module. It  has a personalized adaptive algorithm and is self-directed learning. After completion of the online course, print Certificate of Online Course Completion and   email us  a copy. You can proceed to Part 2 Skills Session, a hands-on skills practice/test appointment.
            </p>
        </div>
    </div>
</section>
<section>
    <h3> Course Fee </h3>
    <p> $15 </p>
</section>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php get_template_part('components/content');?>
</article>

<h4> 
    <b> 
        Categories for this post 
    </b> 
</h4>

<?php
$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

foreach ($terms as $term) {
    echo $term->name;

}

?>

<?php get_footer(); ?>