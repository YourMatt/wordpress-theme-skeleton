<?
// set variables for use in the header

?><!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
   <meta charset="<? bloginfo( 'charset' ); ?>"/>
   <meta name="viewport" content="width=device-width"/>
   <title><? wp_title ("|", true, "left"); ?></title>
   <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/images/favicon.png"/>
   <link rel="profile" href="http://gmpg.org/xfn/11"/>
   <?php wp_head(); ?>
</head>

<body <? body_class(); ?>>
<div id="page" class="hfeed site">

   <? if (has_post_thumbnail ()) : ?>
   <div class="header-image">
      <? the_post_thumbnail ('large'); ?>
   </div>
   <? endif; ?>

   <header id="masthead" class="site-header" role="banner">
      <a class="home-link" href="<?= home_url ('/') ?>" title="<?= esc_attr (get_bloginfo ('name', 'display')) ?>" rel="home">
         <? bloginfo ('name'); ?>
      </a>

      <div class="navbar">
         <nav role="navigation">
            <button class="menu-toggle">Menu</button>
            <?= THEMENAME_build_nav_menu () ?>
         </nav>
      </div>

   </header>

   <div id="main" class="site-main">
