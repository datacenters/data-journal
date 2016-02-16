<div class="bio-cv">
  <div class="inner">
    <div class="left">

    </div>
    <div class="right">
      <div class="bio-text">
        <h1><?php echo $pages->find('about')->title()->html() ?></h1>
        <?php echo $pages->find('about')->text()->kirbytext() ?>
        <section class="bio">
          <?php echo $pages->find('about')->bio()->kirbytext() ?>
        </section>
        <aside class="details">
          <?php echo $pages->find('about')->details()->kirbytext() ?>
        </aside>
      </div>
    </div>
  </div>
</div>
