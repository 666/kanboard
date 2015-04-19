<section id="main">
    <div class="row">
        <div class="columns medium-offset-8 medium-4">
            <button href="#" data-dropdown="dash-view" aria-controls="drop1" aria-expanded="false" class="button tiny dropdown fullw"><?= t('Change dashboard view') ?></button><br>
            <ul id="dash-view" data-dropdown-content class="f-dropdown" aria-hidden="true">
                <li><a href="#" class="dashboard-toggle" data-toggle="projects"><?= t('Show/hide projects') ?></a></li>
                <li><a href="#" class="dashboard-toggle" data-toggle="tasks"><?= t('Show/hide tasks') ?></a></li>
                <li><a href="#" class="dashboard-toggle" data-toggle="subtasks"><?= t('Show/hide subtasks') ?></a></li>
                <li><a href="#" class="dashboard-toggle" data-toggle="calendar"><?= t('Show/hide calendar') ?></a></li>
                <li><a href="#" class="dashboard-toggle" data-toggle="activities"><?= t('Show/hide activities') ?></a></li>
            </ul>
        </div>
    </div>
    <section id="dashboard row">
        <div class="dashboard-left-column columns large-8">
            <div id="dashboard-projects"><?= $this->render('app/projects', array('paginator' => $project_paginator)) ?></div>
            <div id="dashboard-tasks"><?= $this->render('app/tasks', array('paginator' => $task_paginator)) ?></div>
            <div id="dashboard-subtasks"><?= $this->render('app/subtasks', array('paginator' => $subtask_paginator)) ?></div>
        </div>
        <div class="dashboard-right-column  columns large-4">
            <div id="dashboard-calendar">
                <div id="user-calendar"
                     data-check-url="<?= $this->u('calendar', 'user') ?>"
                     data-user-id="<?= $user_id ?>"
                     data-save-url="<?= $this->u('calendar', 'save') ?>"
                >
                </div>
            </div>
            <div id="dashboard-activities">
                <h3 class="p-title"><?= t('Activity stream') ?></h3>
                <?= $this->render('event/events', array('events' => $events)) ?>
            </div>
        </div>
    </section>
</section>