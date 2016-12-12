<?php
/**
 * The template for the front page.
 *
 * This is the template for displaying a static front page.
 * In order for it to work, you will need to specify a page
 * in the Themes > Customize > Static Front Page setting.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="container hero">
        <?php 
        if ( is_active_sidebar( 'homepage-sidebar-1' ) ) {
          $herocols = 4;
        } else {
          $herocols = 6;
        }
        ?>
        <div class="col-md-12">
          <h1>about DME</h1>
          <p class="hero-sub">The DME is a makerspace, fabrication lab and digital media production facility brought to you by the Ryerson Library!</p>
        </div>
        
        <div class="col-sm-<?php echo $herocols ?>">
          <div class="hero-details">
            <div class="faux-crop">
              <img src="<?php bloginfo('stylesheet_directory') ?>/img/homepage-student.jpg" alt="Student Services at DME Lab">
            </div>
            <h2>For Students</h2>
            <p>
              Not sure where to start? We offer one-on-one tutorials to teach you to use emerging tech and Digital Media, including Virtual Reality, 3D Printing and Photoshop / Illustrator 
              Supercharge your learning experience, <a href="<?php echo get_site_url(); ?>/book-workshop">request a 30 minute session now.</a>
            </p>

          </div>
        </div>      
        
        <div class="col-sm-<?php echo $herocols ?>">
          <div class="hero-details">
            <div class="faux-crop">
              <img src="<?php bloginfo('stylesheet_directory') ?>/img/homepage-faculty.jpg" alt="Faculty Services at DME Lab">
            </div>
            <h2>For Faculty</h2>
            <p>
              The DME is here to augment and support your curriculum. We offer workshops in emerging technology and Digital Media Production techniques for the classroom. <a href="<?php echo get_site_url(); ?>/book-workshop">Contact us to book a time.</a> 
            </p>
          </div>
        </div>   

        <?php if ( is_active_sidebar( 'homepage-sidebar-1' ) ) : ?>
          <div class="widget-area col-md-4" role="complementary">
            <?php dynamic_sidebar( 'homepage-sidebar-1' ); ?>
          </div><!-- #primary-sidebar -->
        <?php endif; ?>

      </div><!-- .container.hero -->

      <div class="container lookit">
        <div class="col-md-12">
          <h1>how we can help<!--  at the DME --></h1>
<!--           <p class="lookit-sub">
            Our lab has something for everyone! Need some space to work? Need some specialized software? Need some help with a project? Don't need anything? Come by anyways. Do it. Now. Please? asdfasdfasdfasdf
          </p> -->
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="lookit-details">
            <img src="<?php bloginfo('stylesheet_directory') ?>/img/icon-design.png" alt="">
            <h2>Software</h2>
            <p>We have specialized software to help you with your projects installed on our computers! Come in and make something!</p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="lookit-details">
            <img src="<?php bloginfo('stylesheet_directory') ?>/img/icon-coding.png" alt="">
            <h2>Project Help</h2>
            <p>Need help with a project? We might not have an answer to your problems, but we'll manage to point you in the right direction</p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="lookit-details">
            <img src="<?php bloginfo('stylesheet_directory') ?>/img/icon-hardware.png" alt="">
            <h2>Borrowing</h2>
            <p>Come by to see what technology and hardware we have available for all students to use! You can borrow some of our stuff too!</p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="lookit-details">
            <img src="<?php bloginfo('stylesheet_directory') ?>/img/icon-3dprint.png" alt="">
            <h2>Prototyping<!-- 3D Printing --></h2>
            <p>Our 3D printers are available for all students to use. Drop by and learn how to design and prototype for your projects!</p>
          </div>
        </div>

        <!-- Link to an email form!
        <div class="col-md-12" style="text-align: center;">
          <button class="btn btn-primary">Find out more!</button>
        </div> 
        -->
      </div><!-- .container.lookit -->

      <section class="container instagramz">
        <header class="col-md-12">
          <h2>Instagram</h2>
        </header>

        <div id="instafeed"></div>

      </section>

      <?php
      /*
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      */
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
