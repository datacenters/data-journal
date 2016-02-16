<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->intro()->kirbytext() ?>
      <h1>Eligibility</h1>
      <?php echo $page->intro2()->kirbytext() ?>

      <div class="half">
        <?php echo $page->col()->kirbytext() ?>
      </div>
      <div class="half">
        <?php echo $page->col2()->kirbytext() ?>
      </div>

      <h1>Possible Outcomes</h1>
    </div>

  </main>

<?php snippet('footer') ?>
