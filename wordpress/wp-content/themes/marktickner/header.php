<?php
/**
 * The header is displayed at the top of every page.
 *
 * @package WordPress
 * @subpackage MarkTickner
 * @since MarkTickner 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta name="description" content="The personal portfolio site of Mark Tickner, an undergraduate computer scientist, software engineer and keen photographer.">
<meta name="author" content="Mark Tickner">
<title>
  <?php bloginfo( 'name' ); ?> &raquo;
  <?php if ( is_category() ) : single_cat_title();
        elseif ( is_404() ) : ?>Not Found
  <?php else : the_title(); endif; ?>
</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>

<!-- CSS -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">

<!-- JS -->
<!-- IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
   <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('url'); ?>/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('url'); ?>/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('url'); ?>/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('url'); ?>/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('url'); ?>/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('url'); ?>/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('url'); ?>/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('url'); ?>/favicons/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicons/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicons/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicons/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="<?php bloginfo('url'); ?>/favicons/mstile-144x144.png">
<meta property="og:image" content="http://www.mtickner.co.uk/favicons/apple-touch-icon-152x152.png"/>

<?php wp_head(); ?>

</head>
<body>
  <!-- Header -->
  <header>
    <!-- Navigation -->
    <?php if ( is_page_template( 'page-templates/front-page.php' ) ) : ?>
      <!-- Home Page -->
      <nav class="navbar navbar-default navbar-fixed-top navbar-bottom shadow" role="navigation">
        <div class="container container-full-width">
          <div class="navbar-header">
            <div class="nav-top-only">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
            </div>
          </div>
          <div class="navbar-collapse collapse">
            <?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-home', 'fallback_cb' => 'false', 'container' => false ) ); ?>
            <?php if ( is_user_logged_in() ) { ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-link-admin dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret caret-up large-screen-only"></b><b class="caret small-screen-only"></b></a>
                <ul class="dropdown-menu dropup-menu">
                  <li><a href="<?php echo get_edit_user_link(); ?>"><?php $current_user = wp_get_current_user(); echo $current_user->display_name; ?></a></li>
                  <li><a href="<?php echo wp_logout_url(); ?>">Log Out</a></li>
                  <li class="divider"></li>
                  <li><?php edit_post_link('Edit Page'); ?></li>
                  <li><a href="/wp-admin/">Dashboard</a></li>
                </ul>
              </li>
            </ul>
            <?php } // end if ?>
          </div>
        </div>
      </nav>
      <!-- /Home Page -->
    <?php else : ?>
      <!-- Other Pages -->
        <nav class="navbar navbar-default navbar-fixed-top shadow" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div class="navbar-collapse collapse">
              <?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'false', 'container' => false ) ); ?>
              <?php if ( is_user_logged_in() ) { ?>
              <ul class="nav navbar-nav navbar-right">
                <li class="nav-link-admin dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo get_edit_user_link(); ?>"><?php $current_user = wp_get_current_user(); echo $current_user->display_name; ?></a></li>
                    <li><a href="<?php echo wp_logout_url(); ?>">Log Out</a></li>
                    <li class="divider"></li>
                    <li><?php edit_post_link('Edit Page'); ?></li>
                    <li><a href="/wp-admin/">Dashboard</a></li>
                  </ul>
                </li>
              </ul>
              <?php } // end if ?>
            </div>
          </div>
        </nav>
      <!-- /Other Pages -->
    <?php endif; ?>
  <!-- /Navigation -->
  </header>
  <!-- /Header -->