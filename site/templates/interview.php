<?php snippet('i-header'); ?>

  <div class="left" role="main">

    <section class="interview-wrap">
      <section class="text">
        <header>
          <small>01 / <?php echo $pages->children()->visible()->count(); ?></small><span class="author">Interview &mdash; <?php echo $page->author(); ?></span>
        </header>
        <h1><?php echo $page->title()->html(); ?></h1>
        <?php echo $page->intro()->kirbytext(); ?>
        <?php echo $page->text()->kirbytext(); ?>
      </section>

    </section>

  </div>

  <div class="right" role="main">
    <div class="inner">
      <ul>
        <li>Related Content</li>
        <li><a href="#">Plain</a></li>
        <li><a href="#">Theinhardt</a></li>
        <li><a href="#">Genath</a></li>
        <li><a href="#">Clarendon Graphic</a></li>
        <li><a href="#">Didot Elder</a></li>
      </ul>
    </div>
  </div>

<?php snippet('footer'); ?>
