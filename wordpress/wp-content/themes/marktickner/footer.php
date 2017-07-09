<?php
/**
 * The footer is displayed at the base of every page.
 *
 * @package WordPress
 * @subpackage MarkTickner
 * @since MarkTickner 1.0
 */

wp_footer(); ?>

    <!-- Footer -->
    <footer>
        <?php if ( is_page_template( 'page-templates/front-page.php' ) ) : ?>
            <div class="container container-full-width">
                <div class="footer footer-home">&copy; Mark Tickner, <?php echo date("Y"); ?></div>
            </div>
        <?php else : ?>
            <div class="container">
                <div class="footer">&copy; Mark Tickner, <?php echo date("Y"); ?></div>
            </div>
        <?php endif; ?>
    </footer>
    <!-- /Footer -->
    <!-- Core JS, at the end so the pages load faster -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>