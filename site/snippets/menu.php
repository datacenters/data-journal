  <ul class="menu cf">
    <?php foreach($pages->visible()->not('about') as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>

      <!-- <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?> -->

    </li>
    <?php endforeach ?>
    <li><a class="trigger">About</a></li>
  </ul>
