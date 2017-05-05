
<?php get_header(); ?>
<!-- Intro Section -->
<section id="intro" class="intro-section header">
    <div class="container">
        <div class="col-md-6 col-md-offset-6 ">
            <div class="slider-box">
                <h2 class="h2SliderBox">
                      <?php the_field('h1', 20); ?>

                </h2>
                
                  
                        <div class="col-lg-12  zaletyTxt text-center">
                          <?php the_field('zaleta1', 20); ?>
                        </div>
                        <div class="col-lg-12  zaletyTxt text-center">
                                <?php the_field('zaleta2', 20); ?>
                        </div>
                        <div class="col-lg-12  zaletyTxt text-center">
                                <?php the_field('zaleta3', 20); ?>
                         </div>
                   
             
                <p>
                    <?php the_field('texttext', 20); ?>
                </p>
                <div class="btn button">Kontakt</div>
            </div>
        </div>
    </div>
</section>
<!-- visualizations Section -->
<section class="visu-section container sectionsett">
    <div class="row">
        <div class="col-lg-12">
            <h2>Nasze wizualizacje</h2>
            <hr>
            <p class="text-center   ">Sed do eiusmod tempor incididunt </p>
        </div>
    </div>
    <div class="row">

          <?php
          // the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));



              if ( $wpb_all_query->have_posts() ) :
                /* Start the Loop */
                while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="hovereffect">
              <img class="img-responsive"
                src=<?php the_post_thumbnail(); ?>
                <div class="overlay">
                    <p> <a href="<?php esc_url(the_permalink()); ?>">Kliknij aby zobaczyć więcej</a> </p>
                </div>
            </div>

            <div class="row"></div>
            <h3 class="text-center"><?php the_title(); ?></h3>
            <hr class="visu-hr">
            <p>	<?php the_excerpt(); ?></p>
            <a href="<?php esc_url(the_permalink()); ?>">Czytaj więcej</a>
            </div>
              <?php
              //the_title('<h1>', '</h1>', true);
            endwhile;
          endif;
        ?>


    </div>

</section>
<!-- About Section -->
<section class="container about-section sectionsett">
    <div class="col-lg-12">
        <div class="col-lg-12 ">
            <h2>O nas</h2>
            <hr>
            <p class="text-center">Sed do eiusmod tempor incididunt </p>
        </div>
         <div class="col-lg-12 ">
            <h3 class="text-left">Kalkulator</h3>
        </div>
        <div class="col-lg-6">

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
            <form>
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic"> Rodzaj płotu:</label>
                        <div class="col-md-8">
                            <select id="selectbasic" name="selectbasic" class="form-control input-md">
                                <option>Typ rancho</option>
                                <option>Typ leśne</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic"> Ułożenie desek:</label>
                        <div class="col-md-8">
                            <select id="selectbasic" name="selectbasic" class="form-control input-md">
                                <option>Pionowe</option>
                                <option>Poziome</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic"> Rodzaj drewna:</label>
                        <div class="col-md-8">
                            <select id="selectbasic" name="selectbasic" class="form-control input-md">
                                <option>Sosna</option>
                                <option>Świerk</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic"> Kolor impregnatu:</label>
                        <div class="col-md-8">
                            <select id="selectbasic" name="selectbasic" class="form-control input-md">
                                <option>Brązowy</option>
                                <option>Żółty</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic"> Rodzaj słupków:</label>
                        <div class="col-md-8">
                            <select id="selectbasic" name="selectbasic" class="form-control input-md">
                                <option>Drewniane</option>
                                <option>Betonowe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn button-bottom">OBLICZ</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-lg-6">
            <p>
              <?php the_field('txt-1', 20); ?>
            </p>
            <h3>  <?php the_field('txt-2', 20); ?></h3>
            <p>
                  <?php the_field('txt-3', 20); ?>
            </p>
        </div>
    </div>
</section>
<!-- Contact Section -->



<?php get_footer(); ?>
