<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">
        <!-- call a function to know if category page  -->
      <?php 
      // Option #1: Catch all and make it super simple!
      the_archive_title();

      // Option #2
      // if(is_category()){
      //   // Call the category name from WP
      //   single_cat_title();
      // };
      // // Author name true/false
      // if(is_author()){
      //   // pulls author name
      //   echo 'Posts by: ';
      //   the_author();
      // };
    ?>
    </h1>
    <div class="page-banner__intro">
        <p>Keep up with the latest news</p>
    </div>
    </div>
</div>

<div class="container container--narrow page-section">

    <?php 
        while(have_posts()) {
            // Always call this function to get the data ready for each post.
            the_post();
            ?>
            <div class="post-item">
                <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <div class="metabox">
                    <p>Posted by: <?php the_author_posts_link(); ?> on <?php the_time('n-d-y'); ?> in <?php echo get_the_category_list(', '); ?></p> 
                </div>
                
                <div class="generic-content">
                    <!-- Full body field of content -->
                    <p><?php //the_content(); ?></p>
                    <!-- Short paragraph of the content -->
                    <p><?php the_excerpt(); ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn--blue">Continue Reading</a></p>
                </div>

            </div>

            <?php 
        }
        // Pagination
        echo paginate_links();
     ?>

</div>
    
<?php get_footer(); ?>