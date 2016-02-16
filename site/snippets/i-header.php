<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> — <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <script type="text/javascript" src="http://fast.fonts.net/jsapi/b9b545fd-2f90-4de2-8499-3beed8d48f40.js"></script>
  <?php echo css('assets/style/css/main.min.css') ?>

</head>
<body class ="<?php echo $page->template(); ?>">
<div class="ringbinder-top">
  <svg width="18" height="38" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <path d="M9,37.5c-4.5,0-8.2-3.7-8.2-8.2V8.7c0-4.5,3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2v20.6C17.2,33.8,13.5,37.5,9,37.5z"/>
  </svg>
</div>
<div class="ringbinder-bottom">
  <svg width="18" height="38" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <path d="M9,37.5c-4.5,0-8.2-3.7-8.2-8.2V8.7c0-4.5,3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2v20.6C17.2,33.8,13.5,37.5,9,37.5z"/>
  </svg>
</div>
<div class="main-wrap">
  <header class="header" role="banner">
    <section class="cover">
      <a href="<?php echo url() ?>">&larr;</a>
    </section>
  </header>

  <?php snippet('index') ?>

  <div class="index-trigger">
    <a>Index</a>
  </div>
