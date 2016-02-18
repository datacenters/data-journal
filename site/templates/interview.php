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
        <li><a href="#">The Arc of Networked-Self Dissolution</a></li>
        <li><a href="#">What We Do is Secret</a></li>
        <li><a href="#">World, What World?</a></li>
        <li><a href="#">On the Nomos of the Cloud</a></li>
        <li><a href="#">Accidental Geopolitics?</a></li>
      </ul>
    </div>
  </div>

<?php snippet('footer'); ?>
