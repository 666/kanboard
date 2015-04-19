<h3 class="p-title"><?= t('My projects') ?></h3>
<?php if ($paginator->isEmpty()): ?>
    <div data-alert class="alert-box info"><?= t('Your are not member of any project.') ?></div>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th class="column-8"><?= $paginator->order('Id', 'id') ?></th>
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
                    <?php if ($this->isManager($project['id'])): ?>
                        <?= $this->a('<i class="fa fa-cog"></i>', 'project', 'show', array('project_id' => $project['id']), false, 'dashboard-table-link', t('Settings')) ?>&nbsp;
                    <?php endif ?>

                    <?= $this->a('<i class="fa fa-calendar"></i>', 'calendar', 'show', array('project_id' => $project['id']), false, 'dashboard-table-link', t('Calendar')) ?>&nbsp;

                    <?= $this->a($this->e($project['name']), 'board', 'show', array('project_id' => $project['id'])) ?>
                    <?php if (! empty($project['description'])): ?>
                        <span data-tooltip aria-haspopup="true" class="has-tip" title='<?= $this->e($this->markdown($project['description'])) ?>'><i class="fa fa-info-circle"></i></span>
                    <?php endif ?>
                </td>
                <td class="dashboard-project-stats">
                    <?php foreach ($project['columns'] as $column): ?>
                        <span class="label secondary">
                            <strong title="<?= t('Task count') ?>"><?= $column['nb_tasks'] ?></strong>
                            <?= $this->e($column['title']) ?>
                        </span>
                    <?php endforeach ?>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?= $paginator ?>
<?php endif ?>
