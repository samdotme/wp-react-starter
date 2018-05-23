<?php
  $site_title = get_bloginfo('title');
  $site_description = get_bloginfo('description');
  $html_title = ($site_description != '') ? $site_title . ' | ' . $site_description : $site_title;
?>

<!doctype html>
<html>
  <head>
    <title><?= $html_title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?php echo the_title(); ?>" />
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
    
    <?php wp_head() ?>
  </head>
  <body>
    <?php include('logo-bar.php'); ?>
