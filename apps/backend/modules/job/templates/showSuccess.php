<?php use_stylesheet('job.css') ?>
<?php use_helper('Text') ?>
 
<div id="job">
  <h1><?php echo $job->getClient()->getNom() ?></h1>
  <h2><?php echo $job->getClient()->getVille() ?></h2>
  <h3>
    <?php echo $job->getPosition()->getTitre() ?>
	<small> - <?php echo ($job->getStatut() == 1 ? "Acceptée" : "Refusée") ?></small>
	<small> - <?php echo ($job->getTjm() . " €/jour") ?></small>	
  </h3>
	
   <h4>Contact : <?php echo ($job->getContact()->__toString()) ?></4>
 
  <?php if ($job->getFournisseur()->getLogo()): ?>
    <div class="logo">
      <a href="<?php echo $job->getFournisseur()->getUrl() ?>">
        <img src="/uploads/company/<?php echo $job->getFournisseur()->getLogo() ?>"
          alt="<?php echo $job->getFournisseur()->getNom() ?> logo" />
      </a>
    </div>
  <?php endif ?>
 
  <div class="description">
    <?php echo simple_format_text($job->getCommentaire()) ?>
  </div>
 
  <h4>Date de présentation: </h4>
 
  <p class="how_to_apply"><?php echo $job->getDatePresentation() ?></p>
 
  <div class="meta">
    <small>posted on <?php echo $job->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
  </div>
 
  <div style="padding: 20px 0">
	<hr />
	<a href="<?php echo url_for('job/index') ?>">Retour à la liste</a> |
    <a href="<?php echo url_for('job/edit?id='.$job->getId()) ?>">Editer</a>
  </div>
</div>