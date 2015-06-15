<section id="main">
    <div class="page-header">

        <?php if ($this->userSession->isAdmin()): ?>

            <ul class="medium-6 medium-offset-6 button-group even-2">
                <li><?= $this->a('<i class="fa fa-plus fa-fw"></i>'.t('New project'), 'project', 'create', array(), false, $class = 'button') ?></li>
                <li><?= $this->a('<i class="fa fa-lock fa-fw"></i>'.t('New private project'), 'project', 'create', array('private' => 1), false, $class = 'button') ?></li>
            </ul>

        <?php else: ?>

            <div class="medium-6 medium-offset-6"><?= $this->a('<i class="fa fa-lock fa-fw"></i>'.t('New private project'), 'project', 'create', array('private' => 1), false, $class = 'button expand') ?></div>

        <?php endif ?>

    </div>
    <section>
        <?php if ($paginator->isEmpty()): ?>
            <div data-alert class="alert-box info"><?= t('No project') ?></div>
        <?php else: ?>
            <table class="table-fixed">
                <thead>
                    <tr>
                        <th class="column-8"><?= $paginator->order(t('Id'), 'id') ?></th>
                        <th class="column-8"><?= $paginator->order(t('Status'), 'is_active') ?></th>
                        <th class="column-20"><?= $paginator->order(t('Project'), 'name') ?></th>
                        <th><?= t('Columns') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($paginator->getCollection() as $project): ?>
                    <tr>
                        <td>
                            <?= $this->a('#'.$project['id'], 'board', 'show', array('project_id' => $project['id']), false, 'dashboard-table-link') ?>
                        </td>
                        <td>
                            <?php if ($project['is_active']): ?>
                                <?= t('Active') ?>
                            <?php else: ?>
                                <?= t('Inactive') ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <?= $this->a('<i class="fa fa-table"></i>', 'board', 'show', array('project_id' => $project['id']), false, 'dashboard-table-link', t('Board')) ?>&nbsp;

                            <?php if ($project['is_public']): ?>
                                <i class="fa fa-share-alt fa-fw"></i>
                            <?php endif ?>
                            <?php if ($project['is_private']): ?>
                                <i class="fa fa-lock fa-fw"></i>
                            <?php endif ?>

                            <?= $this->a($this->e($project['name']), 'project', 'show', array('project_id' => $project['id'])) ?>
                            <?php if (! empty($project['description'])): ?>
                                <span class="column-tooltip has-tip" data-tooltip aria-haspopup="true" title='<?= $this->e($this->markdown($project['description'])) ?>'>
                                    <i class="fa fa-info-circle"></i>
                                </span>
                            <?php endif ?>
                        </td>
                        <td class="dashboard-project-stats">
                            <?php foreach ($project['columns'] as $column): ?>
                                <span class="label secondary">
                                    <strong title="<?= t('Task count') ?>"><?= $column['nb_tasks'] ?></strong>
                                    <span><?= $this->e($column['title']) ?></span>
                                </span>
                            <?php endforeach ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <?= $paginator ?>
        <?php endif ?>
    </section>
</section>
