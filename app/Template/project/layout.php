<section id="main">
    <div class="page-header">
        <ul class="button-group medium-6 medium-offset-6 even-2">
            <li>
                <?= $this->a('<i class="fa fa-table fa-fw"></i>'.t('Back to the board'), 'board', 'show', array('project_id' => $project['id']), false, "button") ?>
            </li>
            <li>
                <?= $this->a('<i class="fa fa-folder fa-fw"></i>'.t('All projects'), 'project', 'index', array(), false, "button") ?>
            </li>
        </ul>
    </div>
    <section class="sidebar-container row" id="project-section">

        <?= $this->render('project/sidebar', array('project' => $project)) ?>

        <div class="sidebar-content columns medium-9">
            <?= $project_content_for_layout ?>
        </div>
    </section>
</section>