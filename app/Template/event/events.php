<?php if (empty($events)): ?>
    <div data-alert class="alert-box info"><?= t('No activity.') ?></div>
<?php else: ?>

    <div class="activity-events">
    <?php foreach ($events as $event): ?>
        <div class="activity-event">
            <p class="activity-datetime">
                <?php if ($this->contains($event['event_name'], 'subtask')): ?>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-tasks fa-stack-1x fa-inverse"></i>
                    </span>
                <?php elseif ($this->contains($event['event_name'], 'task')): ?>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                    </span>
                <?php elseif ($this->contains($event['event_name'], 'comment')): ?>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-comments-o fa-stack-1x fa-inverse"></i>
                    </span>
                <?php endif ?>
                &nbsp;<?= dt('%B %e, %Y at %k:%M %p', $event['date_creation']) ?>
            </p>
            <div class="activity-content"><?= $event['event_content'] ?></div>
        </div>
    <?php endforeach ?>
    </div>

<?php endif ?>