<?php
/**
 * The template for displaying work Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
            <?php
            $ancestors = array_reverse( get_ancestors( get_cat_ID( single_cat_title( "", false ) ), 'category' ) );
            $cat_parent_and_cat = '';
            if( $ancestors ) {
              foreach( $ancestors as $cat ) {               
                $category_link = get_category_link( $cat );
                $cat_name = get_cat_name( $cat );
                $cat_parent_and_cat .= '<a href="' . $category_link . '" title="View all posts in ' . $cat_name . '">' . $cat_name . '</a>' . ' &raquo; ' ;
              }
            }
            echo $cat_parent_and_cat;
            echo single_cat_title(); ?>
          </h2>
        </header>
        <section>
          <?php if ( category_description() ) : echo category_description(); endif; ?>
          <?php if ( have_posts() ) : ?>
            <div class="row">
              <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-xs-12 col-md-4">
                  <div class="work-item shadow transition">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      <?php
                        $post_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'work-item-top-image', false, '' );

                        if( !empty( $post_thumbnail_src ) ) {
                          $post_thumbnail_style = 'style="background-image: url(\'' . $post_thumbnail_src[0] . '\');"';
                        }
                      ?>
                      <div class="work-item-top" <?php echo $post_thumbnail_style; ?>></div>
                      <div class="work-item-bottom work-item-title"><?php the_title(); ?></div>
                    </a>
                    <div class="work-item-bottom work-item-categories">
                      <div class="shadow"><span class="glyphicon glyphicon-tags"></span>
                        <?php the_category_filter( the_category( ', ' ) ) ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php else : ?>
            No posts were found in the selected category.
          <?php endif; ?>
        </section>
      </article>
    </div>
  </div>
</section>
<!-- /Content -->

<?php get_footer(); ?>