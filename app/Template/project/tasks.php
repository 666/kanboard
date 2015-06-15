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
                <?= $this->a('<i class="fa fa-search fa-fw"></i> '.t('Search'), 'project', 'search', array('project_id' => $project['id']), false, "button success") ?>
            </li>
            <li>
                <?= $this->a('<i class="fa fa-dashboard fa-fw"></i> '.t('Activity'), 'project', 'activity', array('project_id' => $project['id']), false, "button success") ?>
            </li>
        </ul>
    </div>
    <section>
    <?php if ($paginator->isEmpty()): ?>
        <p class="alert"><?= t('No task') ?></p>
    <?php else: ?>
        <?= $this->render('task/table', array(
            'paginator' => $paginator,
            'categories' => $categories,
            'columns' => $columns,
        )) ?>
    <?php endif ?>
    </section>
</section>