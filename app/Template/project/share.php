<div class="page-header">
    <h2><?= t('Public access') ?></h2>
</div>

<?php if ($project['is_public']): ?>

    <div class="listing">
        <ul class="button-group even-2">
            <li><?= $this->a('<i class="fa fa-share-alt"></i> '.t('Public link'), 'board', 'readonly', array('token' => $project['token']), false, 'button secondary', '', true) ?></li>
            <li><?= $this->a('<i class="fa fa-rss-square"></i> '.t('RSS feed'), 'project', 'feed', array('token' => $project['token']), false, 'button secondary', '', true) ?></li>
        </ul>
        <input type="text" class="auto-select" readonly="readonly" value="<?= $this->getCurrentBaseUrl().$this->u('board', 'readonly', array('token' => $project['token'])) ?>"/>
    </div>

    <?= $this->a(t('Disable public access'), 'project', 'share', array('project_id' => $project['id'], 'switch' => 'disable'), true, 'button alert') ?>

<?php else: ?>
    <?= $this->a(t('Enable public access'), 'project', 'share', array('project_id' => $project['id'], 'switch' => 'enable'), true, 'button success') ?>
<?php endif ?>
