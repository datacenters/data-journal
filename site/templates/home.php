<?php snippet('header') ?>

  <div class="home-left" role="main">
    <!-- <section class="schrift-text">
      <h2><?php echo $page->schrift()->html(); ?></h2>
    </section>
    <nav>
      <li><a>Type Designers</a><small>(<?php echo $pages->find('interviews')->children()->visible()->count(); ?>)</small></li>
      <li><a>Type Foundries</a><small></small></li>
      <li><a>Typographers</a><small></small></li>
    </nav> -->

    <h1>AU Data Sovereignty</h1>

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

    <!-- <div class="client-list art">
      <ul>
        <?php foreach(page('interviews')->children()->visible()->limit(5)->offset(0) as $interview): ?>
        <li>
          <small><?php echo $interview->published(); ?></small>
          <a href="<?php echo $interview->url() ?>"><?php echo html($interview->title()) ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>

    <div class="client-list art">
      <ul>
        <?php foreach(page('interviews')->children()->visible()->offset(5)->limit(5) as $interview): ?>
        <li>
          <small><?php echo $interview->published(); ?></small>
          <a href="<?php echo $interview->url() ?>"><?php echo html($interview->title()) ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </div> -->


  </div>

<?php snippet('footer') ?>
