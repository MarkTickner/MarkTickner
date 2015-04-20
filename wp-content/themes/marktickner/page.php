<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage MarkTickner
 * @since MarkTickner 1.0
 */

get_header();

if ( is_page( 'contact' ) ) : ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/contact-style.css">
<?php endif;

?>

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
          <?php the_content(); ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </section>
      </article>
    </div>
  </div>
</section>
<!-- /Content -->

<?php get_footer(); ?>