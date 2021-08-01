<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

 		<section class="elementor-section elementor-top-section elementor-element elementor-section-boxed content content" data-element_type="section">
 		  <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-row">
          <div class="elementor-column elementor-col-75 elementor-top-column elementor-element" data-element_type="column">
            <div class="elementor-column-wrap">
              <div class="elementor-widget-wrap">
                <h1><?php echo get_the_title();?></h1>
                <h3><?php echo do_shortcode('[acf field="blurb"]');?></h3>
                <?php echo the_content(); ?>
                <div style="text-align: center">

                  <h3>Suggest A Coffee Making Method</h3>
                  <p>Make a suggestion to our staff on your favorite coffee making method!</p>
                </div>
                <?php echo do_shortcode('[fluentform id="3"]') ?>
              </div>
            </div>
          </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element" data-element_type="column">
              <div class="elementor-column-wrap"> 
            <div class="elementor-widget-wrap"> 
              <h2>All Coffee Making</h2>
              <?php echo do_shortcode('[coffee_making_areas_link]') ?>
            </div>
 		    </div>
 		  </div>
 		</section>

<?php endwhile; ?>
<?php get_footer(); ?>