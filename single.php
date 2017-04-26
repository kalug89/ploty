<?php get_header(); ?>
<!-- Intro Section -->

<!-- visualizations Section -->
<section class="visu-section container sectionsett">
    <div class="row">
        <div style="margin-top: 170px;" class="col-lg-12">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <h2><?php the_title(); ?></h2>
         <hr>
         <?php the_post_thumbnail("full"); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
        </div>
    </div>

</section>



<?php get_footer(); ?>
