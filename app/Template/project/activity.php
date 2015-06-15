<section id="main">
    <div class="page-header">
        <div class="small-10 small-offset-1 medium-text-center">
        <ul class="button-group">
            <li>
                <?= $this->a('<i class="fa fa-table fa-fw"></i> '.t('Back to the board'), 'board', 'show', array('project_id' => $project['id']), false, 'button success') ?>
            </li>
            <li>
                <?= $this->a('<i class="fa fa-calendar fa-fw"></i> '.t('Calendar'), 'calendar', 'show', array('project_id' => $project['id']), false, 'button success') ?>
            </li>
            <li>
                <?= $this->a('<i class="fa fa-search fa-fw"></i> '.t('Search'), 'project', 'search', array('project_id' => $project['id']), false, 'button success') ?>
            </li>
            <li>
                <?= $this->a('<i class="fa fa-check-square-o fa-fw"></i> '.t('Completed tasks'), 'project', 'tasks', array('project_id' => $project['id']), false, 'button success') ?>
            </li>
            <?php if ($project['is_public']): ?>
                <li><?= $this->a('<i class="fa fa-rss-square fa-fw"></i> '.t('RSS feed'), 'project', 'feed', array('token' => $project['token']), false, 'button success', '', true) ?></li>
            <?php endif ?>
        </ul>
        </div>
    </div>
    <section class="medium-10 medium-offset-1">
        <?= $this->render('event/events', array('events' => $events)) ?>
    </section>
</section>