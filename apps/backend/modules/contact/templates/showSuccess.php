<?php use_stylesheet('job.css') ?>
<?php use_stylesheet('jobs.css') ?>
<?php use_helper('Text') ?>
 

<div id="job">
  	<h1><?php echo $contact->getNom() . ' ' . $contact->getPrenom() ?></h1>
  	<h2><?php echo $contact->getPosition() ?></h2>
	
	<div class="details">
		<h3><?php echo $contact->getCompany()->getNom() ?></h3>
  		<div class="description">
			Email: <?php echo $contact->getEmail() ?><br/>
			Téléphone: <?php echo $contact->getTelephone() ?><br/>
			Mobile: <?php echo $contact->getMobile() ?><br/>
			A rappeller: <?php echo ($contact->getRappel() == 1 ? "Oui" : "Non") ?><br/>
  		</div>
	</div>
 
  <div class="description">
    <?php echo $contact->getCommentaire() ?>
  </div>

	<?php if(sizeof($jobs)>0): ?>
		<div class="jobs">
			<h4>Missions</h4>
			<?php include_partial('job/list', array('jobs' => $jobs)) ?>
		</div>
	<?php endif; ?>	
 
  <div style="padding: 20px 0">
	<hr />
	<a href="<?php echo url_for('contact/index') ?>">Retour à la liste</a> |
    <a href="<?php echo url_for('contact/edit?id='.$contact->getId()) ?>">Editer</a>
  </div>
</div>
