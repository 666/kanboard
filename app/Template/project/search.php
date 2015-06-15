<section id="main">
    <div class="page-header">
        <ul class="button-group medium-10 medium-offset-1 medium-text-center">
            <li>
                <?= $this->a('<i class="fa fa-table fa-fw"></i> '.t('Back to the board'), 'board', 'show', array('project_id' => $project['id']), false, "button success") ?>
            </li>
            <li>
                <?= $this->a('<i class="fa fa-calendar fa-fw"></i> '.t('Calendar'), 'calendar', 'show', array('project_id' => $project['id']), false, "button success") ?>
            </li>
            <li>
                <?= $this->a('<i class="fa fa-check-square-o fa-fw"></i> '.t('Completed tasks'), 'project', 'tasks', array('project_id' => $project['id']), false, "button success") ?>
            </li>
            <li>
                <?= $this->a('<i class="fa fa-dashboard fa-fw"></i> '.t('Activity'), 'project', 'activity', array('project_id' => $project['id']), false, "button success") ?>
            </li>
        </ul>
    </div>
    <section>
    <form method="get" action="?" autocomplete="off">
        <?= $this->formHidden('controller', $values) ?>
        <?= $this->formHidden('action', $values) ?>
        <?= $this->formHidden('project_id', $values) ?>
        <?= $this->formText('search', $values, array(), array('autofocus', 'required', 'placeholder="'.t('Search').'"'), 'form-input-large') ?>
        <input type="submit" value="<?= t('Search') ?>" class="button success"/>
    </form>

    <?php if (! empty($values['search']) && $paginator->isEmpty()): ?>
        <div data-alert class="alert-box secondary"><?= t('Nothing found.') ?></div>
    <?php elseif (! $paginator->isEmpty()): ?>
        <?= $this->render('task/table', array(
            'paginator' => $paginator,
            'categories' => $categories,
            'columns' => $columns,
        )) ?>
    <?php endif ?>

    </section>
</section>