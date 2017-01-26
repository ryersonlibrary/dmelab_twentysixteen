<?php
/**
 * Template Name: Tutorial
 *
 * Custom template for displaying tutorials/courses.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

$lesson = null;

if ( isset( $_GET['lesson'] ) ) {
  // todo: input sanitation
  $lesson = (int) $_GET['lesson'];
  $lesson_index = $lesson - 1;
}

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
          <header class="entry-header col-md-12">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header><!-- .entry-header -->

          <div class="entry-content col-md-8" style="margin-top:0;">

            <?php if ( $lesson > 0 ) : ?>
              <?php $rows = get_field('lesson'); ?>
              <h2>Lesson <?php echo $lesson ?></h2>

              <p><?php echo $rows[$lesson_index]['content']; ?></p>

              <?php if ( $rows[$lesson_index]['downloads_repeater'] ) : ?>
                <?php foreach ( $rows[$lesson_index]['downloads_repeater'] as $d ) : ?>
                  <p><a href="<?php echo $d['file']; ?>"></a></p>
                <?php endforeach ?>
              <?php endif; ?>
              
              <p>
                <a href="?lesson=<?php echo $lesson - 1 ?>">Previous Lesson</a>
                <a href="?lesson=<?php echo $lesson + 1 ?>">Next Lesson</a>
              </p>
            <?php else : ?>
              <h2>Introduction</h2>
              <?php
                the_content();

                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                  'after'  => '</div>',
                ) );
              ?>
              <a href="?lesson=1">Start course</a>

            <?php endif; ?>
            

          </div><!-- .entry-content -->

          <aside class="col-md-4">
            <h2>Quick Links</h2>
            <nav>
              <ul style="margin-left:0">
                <?php 
                  // check if the repeater field has rows of data
                  if ( have_rows('lesson') ) :
                    // loop through the rows of data
                    $count = 0;
                    while ( have_rows('lesson') ) : the_row();
                      $count++;
                      ?>
                        <li><a href="<?php echo get_permalink() ?>?lesson=<?php echo $count ?>"><?php the_sub_field('title'); ?></a></li>
                      <?php
                      // display a sub field value
                      // the_sub_field('title');
                    endwhile;
                  else :
                    //no rows found
                  endif;
                ?>
              </ul>
            </nav>
          </aside>

          <footer class="entry-footer col-md-12">
            <?php
              edit_post_link(
                sprintf(
                  /* translators: %s: Name of current post */
                  esc_html__( 'Edit %s', '_s' ),
                  the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ),
                '<span class="edit-link">',
                '</span>'
              );
            ?>
          </footer><!-- .entry-footer -->
        </article><!-- #post-## -->

        <?php

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
