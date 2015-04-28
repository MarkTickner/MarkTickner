<?php
/**
 * Template Name: Home
 *
 * Description: A page template that is used on the home page, with large heading and
 * customised navigation bars.
 *
 * @package WordPress
 * @subpackage MarkTickner
 * @since MarkTickner 1.0
 */

get_header(); ?>

<!-- Content -->
<section>
  <div class="container container-full-width">
    <article>
      <header>
        <h1>
          <?php bloginfo( 'name' ); ?>
        </h1>
      </header>
      <section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <span class="tagline tagline-text shadow">
        <?php bloginfo( 'description' ); ?>
        <?php the_content(); ?>
        </span> <a class="btn btn-primary btn-about tagline-text shadow" href="about/">About »</a>
        <?php endwhile; ?>
        <?php endif; ?>
      </section>
    </article>
  </div>
</section>
<!-- /Content -->

<?php get_footer(); ?>