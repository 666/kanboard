<div class="page-header">
    <div class="row">
        <div class="small-12 medium-6 large-3 columns">
            <button data-dropdown="drop" aria-controls="drop", aria-expanded="false" class="button expand tiny dropdown"><?= t('Actions') ?></button><br>
            <ul id="drop" data-dropdown-content class="f-dropdown" role="menu" aria-hidden="false" tabindex="-1">
                <li>
                    <span class="filter-collapse">
                        <a href="#" class="filter-collapse-link"><i class="fa fa-compress fa-fw"></i> <?= t('Collapse tasks') ?></a>
                    </span>
                    <span class="filter-expand" style="display: none">
                        <a href="#" class="filter-expand-link"><i class="fa fa-expand fa-fw"></i> <?= t('Expand tasks') ?></a>
                    </span>
                </li>
                <li>
                    <span class="filter-compact">
                        <a href="#" class="filter-toggle-scrolling"><i class="fa fa-th fa-fw"></i> <?= t('Compact view') ?></a>
                    </span>
                    <span class="filter-wide" style="display: none">
                        <a href="#" class="filter-toggle-scrolling"><i class="fa fa-arrows-h fa-fw"></i> <?= t('Horizontal scrolling') ?></a>
                    </span>
                </li>
                <li>
                    <?= $this->a('<i class="fa fa-search fa-fw"></i> '.t('Search'), 'project', 'search', array('project_id' => $project['id'])) ?>
                </li>
                <li>
                    <?= $this->a('<i class="fa fa-check-square-o fa-fw"></i> '.t('Completed tasks'), 'project', 'tasks', array('project_id' => $project['id'])) ?>
                </li>
                <li>
                    <?= $this->a('<i class="fa fa-dashboard fa-fw"></i> '.t('Activity'), 'project', 'activity', array('project_id' => $project['id'])) ?>
                </li>
                <li>
                    <?= $this->a('<i class="fa fa-calendar fa-fw"></i> '.t('Calendar'), 'calendar', 'show', array('project_id' => $project['id'])) ?>
                </li>
                <?php if ($project['is_public']): ?>
                <li>
                    <?= $this->a('<i class="fa fa-share-alt fa-fw"></i> '.t('Public link'), 'board', 'readonly', array('token' => $project['token']), false, '', '', true) ?>
                </li>
                <?php endif ?>
                <?php if ($this->acl->isManagerActionAllowed($project['id'])): ?>
                <li>
                    <?= $this->a('<i class="fa fa-line-chart fa-fw"></i> '.t('Analytics'), 'analytic', 'tasks', array('project_id' => $project['id'])) ?>
                </li>
                <li>
                    <?= $this->a('<i class="fa fa-pie-chart fa-fw"></i> '.t('Budget'), 'budget', 'index', array('project_id' => $project['id'])) ?>
                </li>
                <li>
                    <?= $this->a('<i class="fa fa-cog fa-fw"></i>'.t('Configure'), 'project', 'show', array('project_id' => $project['id'])) ?>
                </li>
                <?php endif ?>
            </ul>
        </div>
        <div class="small-12 medium-6 large-3 columns">
            <?= $this->formSelect('user_id', $users, array(), array(), array('data-placeholder="'.t('Filter by user').'"', 'data-notfound="'.t('No results match:').'"'), 'apply-filters chosen-select') ?>
        </div>
        <div class="small-12 medium-6 large-3 columns">
            <?= $this->formSelect('category_id', $categories, array(), array(), array('data-placeholder="'.t('Filter by category').'"', 'data-notfound="'.t('No results match:').'"'), 'apply-filters chosen-select') ?>
        </div>
        <div class="small-12 medium-6 large-3 columns">
            <select id="more-filters" multiple data-placeholder="<?= t('More filters') ?>" data-notfound="<?= t('No results match:') ?>" class="apply-filters chosen-select hide-mobile">
                <option value=""></option>
                <option value="filter-due-date"><?= t('Filter by due date') ?></option>
                <option value="filter-recent"><?= t('Filter recently updated') ?></option>
            </select>
        </div>
    </div>
</div>