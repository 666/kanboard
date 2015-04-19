<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="noindex,nofollow">

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" href="assets/img/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/touch-icon-ipad-retina.png">

    <title><?= isset($title) ? $this->e($title) : 'Kanboard' ?></title>

    <?php if (isset($board_public_refresh_interval)): ?>
    <meta http-equiv="refresh" content="<?= $board_public_refresh_interval ?>">
    <?php endif ?>

    <?= $this->css($this->u('app', 'colors'), false) ?>
    <?= $this->css('assets/css/app.css') ?>

    <?php if ($this->config->get('application_stylesheet')): ?>
    <style><?= $this->config->get('application_stylesheet') ?></style>
    <?php endif ?>

  </head>
  <body data-status-url="<?= $this->u('app', 'status') ?>"
        data-login-url="<?= $this->u('auth', 'login') ?>"
        data-timezone="<?= $this->getTimezone() ?>"
        data-js-lang="<?= $this->jsLang() ?>">

    <?php if (isset($no_layout) && $no_layout): ?>
        <?= $content_for_layout ?>
    <?php else: ?>

    <div class="off-canvas-wrap docs-wrap" data-offcanvas="">
      <div class="inner-wrap">
        <nav class="tab-bar">
          <section class="left-small">
            <a aria-expanded="false" class="left-off-canvas-toggle menu-icon"><span></span></a>
          </section>

          <section class="right tab-bar-section">
            <h1 class="title"><?= $this->summary($this->e($title)) ?></h1>
          </section>
        </nav>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <li class="userinfo">
              <?php echo $this->avatar($this->getEmail(), $this->getFullname(), 80) ?>
              <span class="username"><?= $this->a($this->e($this->getFullname()), 'user', 'show', array('user_id' => $this->userSession->getId())) ?></span>
            </li>

            <?php if (isset($board_selector) && ! empty($board_selector)): ?>
            <li><label>Projects</label></li>
            <li><input type="text" placeholder="Search"></li>

            <?php foreach($board_selector as $board_id => $board_name): ?>
            <li><a href="#"><?= $this->e($board_name) ?></a></li>
            <?php endforeach ?>

            <?php endif ?>

            <li><?= $this->a('<i class="fa fa-file"></i> '.t('Project management'), 'project', 'index') ?>
            <li class="has-submenu"><a href="#"><i class="fa fa-cog"></i> Administrative</a>
              <ul class="left-submenu">
                  <li class="back"><a href="#">Back</a></li>
                  <li><?= $this->a('<i class="fa fa-users"></i> '.t('User management'), 'user', 'index') ?></li>
                  <li><?= $this->a('<i class="fa fa-cog"></i> '.t('Settings'), 'config', 'index') ?></li>
              </ul>
            </li>

            <?php if ($this->userSession->isAdmin()): ?>
            <li class="has-submenu"><a href="#" class="success button expand"><i class="fa fa-plus"></i> <?= t('New project') ?></a>
              <ul class="left-submenu">
                  <li class="back"><a href="#">Back</a></li>
                  <li><?= $this->a('<i class="fa fa-plus"></i> '.t('New public project'), 'project', 'create') ?></li>
                  <li><?= $this->a('<i class="fa fa-plus"></i> '.t('New private project'), 'project', 'create', array('private' => 1)) ?></li>
              </ul>
            </li>
            <?php else: ?>
            <li><?= $this->a('<i class="fa fa-plus"></i> '.t('New private project'), 'project', 'create', array('private' => 1), null, 'success button expand') ?></li>
            <?php endif ?>

            <li><?= $this->a('<i class="fa fa-sign-out"></i> '.t('Logout'), 'auth', 'logout', array(), null, 'alert button expand') ?>
          </ul>
        </aside>

        <section class="main-section">
          <div class="row">
            <div class="large-12 columns">

              <?= $this->flash('<div data-alert class="alert-box success">%s</div>') ?>
              <?= $this->flashError('<div data-alert class="alert-box alert">%s</div>') ?>
              <?= $content_for_layout ?>

            </div>
          </div>    
        </section>
      </div>
    </div>

    <?php endif ?>

    <?php if (! isset($not_editable)): ?>
    <?= $this->js('assets/js/app.js') ?>
    <?php endif ?>
  </body>
</html>