<?php use_stylesheet('job.css') ?>
<?php use_helper('Text') ?>
 
<div id="job">
  <h1><?php echo $company->getNom() ?></h1>
  <h2><a target="_blank" href="<?php echo $company->getUrl() ?>"><?php echo $company->getUrl() ?></a></h2>
  <h3>
    <?php echo $company->getNom() ?><br/>
	<small><?php echo ($company->getAdresse() . " - " . $company->getCodePostal() . " " . $company->getVille()) ?></small><br/>
	<small><?php echo $company->getTelephone() ?></small>
  </h3>
 
  <?php if ($company->getLogo()): ?>
    <div class="logo">
      <a href="<?php echo $company->getUrl() ?>">
        <img src="/uploads/company/<?php echo $company->getLogo() ?>"
          alt="<?php echo $company->getNom() ?> logo" />
      </a>
    </div>
  <?php endif ?>
 
  <div class="description">
    <?php echo simple_format_text($company->getCommentaire()) ?>
  </div>
 
  <div class="meta">
    <small>posted on <?php echo $company->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
  </div>
 
  <div style="padding: 20px 0">
	<hr />
	<a href="<?php echo url_for('company/index') ?>">Retour à la liste</a> |
    <a href="<?php echo url_for('company/edit?id='.$company->getId()) ?>">Editer</a>
  </div>
</div>