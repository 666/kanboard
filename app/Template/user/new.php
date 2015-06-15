<section id="main">
    <div class="page-header">
        <div class="medium-6 medium-offset-6">
            <?= $this->a('<i class="fa fa-user fa-fw"></i> '.t('All users'), 'user', 'index', array(), false, "button success expand") ?>
        </div>
    </div>
    <section>
    <form method="post" action="<?= $this->u('user', 'save') ?>" autocomplete="off">

        <?= $this->formCsrf() ?>

        <div class="row nobr">

            <div class="column medium-6">

                <?= $this->formLabel(t('Username'), 'username') ?>
                <?= $this->formText('username', $values, $errors, array('autofocus', 'required', 'maxlength="50"')) ?><br/>

                <?= $this->formLabel(t('Name'), 'name') ?>
                <?= $this->formText('name', $values, $errors) ?><br/>

                <?= $this->formLabel(t('Email'), 'email') ?>
                <?= $this->formEmail('email', $values, $errors) ?><br/>

                <?= $this->formLabel(t('Password'), 'password') ?>
                <?= $this->formPassword('password', $values, $errors, array('required')) ?><br/>

                <?= $this->formLabel(t('Confirmation'), 'confirmation') ?>
                <?= $this->formPassword('confirmation', $values, $errors, array('required')) ?><br/>

            </div>

            <div class="column medium-6">

                <?= $this->formLabel(t('Default project'), 'default_project_id') ?>
                <?= $this->formSelect('default_project_id', $projects, $values, $errors) ?><br/>

                <?= $this->formLabel(t('Timezone'), 'timezone') ?>
                <?= $this->formSelect('timezone', $timezones, $values, $errors) ?><br/>

                <?= $this->formLabel(t('Language'), 'language') ?>
                <?= $this->formSelect('language', $languages, $values, $errors) ?><br/>

                <?= $this->formCheckbox('is_admin', t('Administrator'), 1, isset($values['is_admin']) && $values['is_admin'] == 1 ? true : false) ?>

            </div>

        </div>

        <div class="form-actions">
            <input type="submit" value="<?= t('Save') ?>" class="button success"/>
            <?= $this->a(t('cancel'), 'user', 'index', array(), false, "button secondary") ?>
        </div>
    </form>
    </section>
</section>