<div class="page-header">
    <h2><?= t('Integration with third-party services') ?></h2>
</div>

<fieldset>
  	<legend><h4><i class="fa fa-github fa-fw"></i>&nbsp;<?= t('Github webhooks') ?></h4></legend>
  	<label>Input Label</label>
  	<input type="text" class="auto-select" readonly="readonly" value="<?= $this->getCurrentBaseUrl().$this->u('webhook', 'github', array('token' => $webhook_token, 'project_id' => $project['id'])) ?>"/><br/>
	<p class="form-help"><a href="http://kanboard.net/documentation/github-webhooks" target="_blank"><?= t('Help on Github webhooks') ?></a></p>
</fieldset>

<fieldset>
  	<legend><h4><img src="assets/img/gitlab-icon.png"/>&nbsp;<?= t('Gitlab webhooks') ?></h4></legend>
  	<label>Input Label</label>
  	<input type="text" class="auto-select" readonly="readonly" value="<?= $this->getCurrentBaseUrl().$this->u('webhook', 'gitlab', array('token' => $webhook_token, 'project_id' => $project['id'])) ?>"/><br/>
	<p class="form-help"><a href="http://kanboard.net/documentation/gitlab-webhooks" target="_blank"><?= t('Help on Gitlab webhooks') ?></a></p>
</fieldset>

<fieldset>
  	<legend><h4><i class="fa fa-bitbucket fa-fw"></i>&nbsp;<?= t('Bitbucket webhooks') ?></h4></legend>
  	<label>Input Label</label>
  	<input type="text" class="auto-select" readonly="readonly" value="<?= $this->getCurrentBaseUrl().$this->u('webhook', 'bitbucket', array('token' => $webhook_token, 'project_id' => $project['id'])) ?>"/><br/>
	<p class="form-help"><a href="http://kanboard.net/documentation/bitbucket-webhooks" target="_blank"><?= t('Help on Bitbucket webhooks') ?></a></p>
</fieldset>