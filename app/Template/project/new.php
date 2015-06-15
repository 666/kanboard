<section id="main">
    <div class="page-header">
        <div class="medium-6 medium-offset-6"><?= $this->a('<i class="fa fa-folder fa-fw"></i>'.t('All projects'), 'project', 'index', array(), false, $class = 'button expand') ?></div>
    </div>
    <section>
    <form method="post" action="<?= $this->u('project', 'save') ?>" autocomplete="off" class="medium-4 medium-offset-4 smallcontainer">

        <?= $this->formCsrf() ?>
        <?= $this->formHidden('is_private', $values) ?>
        <div class="row collapse">
            <div class="small-3 large-2 columns">
                <span class="prefix"><?= t('Name') ?></span>
            </div>
            <div class="small-9 large-10 columns">
                <?= $this->formText('name', $values, $errors, array('autofocus', 'required', 'maxlength="50"')) ?>
            </div>
        </div>

        <ul class="button-group form-actions even-2">
            <li><input type="submit" value="<?= t('Save') ?>" class="button success"/></li>
            <li><?= $this->a(t('cancel'), 'project', 'index', array(), false, "button secondary") ?></li>
        </ul>   

    </form>
    </section>
</section>