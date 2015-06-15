<div class="page-header">
    <h2><?= t('Edit project') ?></h2>
</div>
<form method="post" action="<?= $this->u('project', 'update', array('project_id' => $project['id'])) ?>" autocomplete="off">

    <?= $this->formCsrf() ?>
    <?= $this->formHidden('id', $values) ?>

    <?= $this->formLabel(t('Name'), 'name') ?>
    <?= $this->formText('name', $values, $errors, array('required', 'maxlength="50"')) ?>

    <?= $this->formLabel(t('Description'), 'description') ?>

    <div class="form-tabs">

        <div class="write-area">
          <?= $this->formTextarea('description', $values, $errors) ?>
        </div>
        <div class="preview-area">
            <div class="markdown"></div>
        </div>
        <ul class="button-group">
            <li class="form-tab form-tab-selected">
                <a id="markdown-write" class="button secondary tiny" href="#"><i class="fa fa-pencil-square-o fa-fw"></i> <?= t('Write') ?></a>
            </li>
            <li class="form-tab">
                <a id="markdown-preview" class="button secondary tiny" href="#"><i class="fa fa-eye fa-fw"></i> <?= t('Preview') ?></a>
            </li>
        </ul>
    </div>
    <div class="form-help"><a href="http://kanboard.net/documentation/syntax-guide" target="_blank" rel="noreferrer"><?= t('Write your text in Markdown') ?></a></div>

    <?php if ($project['is_private'] == 1 && $this->userSession->isAdmin()): ?>
        <div class="space"></div>
        <?= $this->formCheckbox('is_private', t('Private project'), 1, $project['is_private'] == 1) ?>
    <?php endif ?>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="button success"/>
    </div>
</form>
