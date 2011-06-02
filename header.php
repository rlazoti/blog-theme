<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<link rel="icon" type="image/png" href="http://rodrigolazoti.com.br/favicon.png" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>

<div id="page">
<hr />

<div id="header">
  <div id="logo">
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    <h3><?php bloginfo('description'); ?></h3>
  </div>

  <div id="menu" class="breadcrumb">
    <span class="left"></span>
    <ul>
      <li><a href="<?php echo get_settings('home'); ?>">Home<?php echo $langblog;?></a></li>
      <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
    </ul>
    <span class="right"></span>
  </div>
</div>

