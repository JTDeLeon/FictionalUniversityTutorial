<!-- This file name is used to power the home page of the website -->

<?php 
    get_header();
?>

<!--
    Resources available for documentation:  
    Codex.wordpress.org
    developer.wordpress.org
-->

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>

    <!-- Be sure to update the permalinks once you create a new post type! -->
    <!-- Events Section -->
    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
          <?php  
          // Create custom query for the events post type
            $eventsHomepage = new WP_Query(array(
              'posts_per_page' => 2,
              // Designates the post type! 
              'post_type' => 'event',
            )); 
            
            // Loop through the customer query data
            while($eventsHomepage->have_posts()){
              // Access the data for the post
              $eventsHomepage->the_post();
              ?>
                <div class="event-summary">
                  <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                    <span class="event-summary__month"><?php the_time('M') ?></span>
                    <span class="event-summary__day"><?php the_time('d') ?></span>
                  </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 18) ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
                  </div>
                </div>
            <?php
            }
            // Reset the query data - best practice
            wp_reset_postdata();
          ?>

          <p class="t-center no-margin"><a href="<?php echo site_url('events'); ?>" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>

      <!-- Blog section -->
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
          <?php  
            // Custom Query Object
            $homepagePosts = new WP_Query(array(
              // Num of posts per query
              'posts_per_page' => 2,
              // Filter for cat
              // 'category_name' => 'awards',
              // Filter for type of post i.e. page
              // 'post_type' => 'page'
            ));

            // Access custom query functions
            while($homepagePosts->have_posts()){
              $homepagePosts->the_post();?>
                <div class="event-summary">
                  <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                    <span class="event-summary__month"><?php the_time('M');?></span>
                    <span class="event-summary__day"><?php the_time('d'); ?></span>
                  </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    
                    <p>
                      <?php 
                      // Limited word excerpts 1: Content you want to limit 2: words to limit to
                      // echo wp_trim_words(get_the_content(), 18); 

                      // Pulls in the optionally set excerpt put by the author.
                      // If the post has an excerpt
                      if(has_excerpt()){
                        the_excerpt();  
                      } else {
                        echo wp_trim_words(get_the_content(), 18);
                      }
                      ?>
                      
                      <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                  </div>
                </div>
              <?php
            }
            // IMPORTANT HABIT TO CLOSE and reset CUSTOM QUERY
            wp_reset_postdata();
          ?>

          
          <!-- <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
              <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div> -->

          <p class="t-center no-margin"><a href="<?php echo site_url('blog') ?>" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>

    <!-- End Blog Posts -->

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>
        
<?php
    get_footer();
?>

