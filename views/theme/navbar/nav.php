<?php if ($root->getDepth() === 0) : ?>
  <ul class="uk-nav <?= $primary ?> uk-nav-parent-icon" uk-nav>
<?php endif; ?>

  <?php if (isset($text)): ?>
    <li class="uk-nav-header"><?= $text ?></li>
  <?php endif; ?>

  <?php foreach ($root->getChildren() as $node) : ?>
    <li class="<?= $node->hasChildren() ? 'uk-parent' : '' ?><?= $node->get('active') ? ' uk-active' : '' ?>" >
      <a class="uk-menu-item-middle" href="<?= $node->getUrl() ?>">
        <?php if (!empty($node->get('theme.page_icon'))): ?>
          <i class="uk-margin-small-right" uk-icon="icon:<?= $node->get('theme.page_icon') ?>; ratio: 1.5"></i>
        <?php endif; ?>
        <?= $node->title ?>
      </a>

      <?php if ($node->hasChildren()) : ?>

        <?php if ($root->getDepth() === 0) : ?>
        <ul class="uk-nav-sub">
        <?php endif ?>

          <?= $view->render('theme:views/theme/navbar/nav.php', ['root' => $node]) ?>

        <?php if ($root->getDepth() === 0) : ?>
        </ul>
        <?php endif ?>

      <?php endif; ?>

    </li>
  <?php endforeach; ?>

<?php if ($root->getDepth() === 0) : ?>
</ul>
<?php endif; ?>
