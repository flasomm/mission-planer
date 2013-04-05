<?php use_stylesheet('job.css') ?>
<?php use_helper('Text') ?>
 
<div id="job">
  <h1><?php echo $position->getTitre() ?></h1>
 
  <div class="description">
    <?php echo simple_format_text($position->getCommentaire()) ?>
  </div>
 
  <div class="meta">
    <small>posted on <?php echo $position->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
  </div>
 
  <div style="padding: 20px 0">
	<hr />
	<a href="<?php echo url_for('position/index') ?>">Retour à la liste</a> |
    <a href="<?php echo url_for('position/edit?id='.$position->getId()) ?>">Editer</a>
  </div>
</div>