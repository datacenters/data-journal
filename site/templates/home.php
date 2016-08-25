<?php snippet('header') ?>

  <div class="home-left" role="main">

    <h1>Data Center Journal</h1>

    <?php echo $page->text()->kirbytext() ?>
    <div class="content-list">
      <ul>
        <?php foreach(page('interviews')->children()->visible()->limit(5)->offset(0) as $interview): ?>
        <li>
          <small><?php echo $interview->published(); ?></small>
          <a href="<?php echo $interview->url() ?>"><?php echo html($interview->title()) ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>

    <div class="content-list">
      <ul>
        <?php foreach(page('interviews')->children()->visible()->offset(5)->limit(5) as $interview): ?>
        <li>
          <small><?php echo $interview->published(); ?></small>
          <a href="<?php echo $interview->url() ?>"><?php echo html($interview->title()) ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

  <div class="home-right" role="main">
    <!-- <figure>
      <img src="<?php echo url('assets/images/Dymaxion2.jpg') ?>">
    </figure> -->
  </div>

<?php snippet('footer') ?>
