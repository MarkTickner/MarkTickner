<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage MarkTickner
 * @since MarkTickner 1.0
 */

get_header(); ?>

<!-- Content -->
<section>
  <div class="container">
    <div class="content-container shadow-big">
      <article>
        <header>
          <h2>
            <?php the_title(); ?>
          </h2>
        </header>
        <section>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="page-header-bar">
            <?php
              $post_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'work-item-page-header', false, '' );
              if( !empty( $post_thumbnail_src ) ) {
                $post_thumbnail_style = 'style="background: url(\'' . $post_thumbnail_src[0] . '\');"';
              } else {
                $post_thumbnail_style = 'style="background: #EEE;"';
              }
            ?>
            <div class="page-header-image" <?php echo $post_thumbnail_style; ?>></div>
            <div class="post-date shadow"> <i class="post-day">
              <?php the_time('d'); ?>
              </i> <i class="post-month">
              <?php the_time('M'); ?>
              </i> <i class="post-year">
              <?php the_time('Y'); ?>
              </i> </div>
            <div class="categories shadow"> <span class="glyphicon glyphicon-tags"></span>
              <?php the_category_filter(the_category(', ')) ?>
            </div>
          </div>
          <div>
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
          <div class="post-link">
            <div class="post-link-next">
              <?php next_post_link('&laquo; %link', '%title', true); ?>
            </div>
            <div class="post-link-previous">
              <?php previous_post_link('%link &raquo;', '%title', true); ?>
            </div>
            <div class="clearfix"></div>
          </div>
        </section>
      </article>
    </div>
  </div>
</section>
<!-- /Content -->

<?php get_footer(); ?>