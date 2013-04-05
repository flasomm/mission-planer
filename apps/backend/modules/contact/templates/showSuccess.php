<?php use_stylesheet('job.css') ?>
<?php use_helper('Text') ?>
 
<div id="job">
  	<h1><?php echo $contact->getNom() . ' ' . $contact->getPrenom() ?></h1>
  	<h2><?php echo $contact->getPosition() ?></h2>
	
	<div class="details">
		Entreprise: <?php echo $contact->getCompany()->getNom() ?><br/>
		Email: <?php echo $contact->getEmail() ?><br/>
		Téléphone: <?php echo $contact->getTelephone() ?><br/>
		Mobile: <?php echo $contact->getMobile() ?><br/>
		A rappeller: <?php echo ($contact->getRappel() == 1 ? "Oui" : "Non") ?><br/>
	</div>
 
  <div class="description">
    <?php echo $contact->getCommentaire() ?>
  </div>

 
  <div style="padding: 20px 0">
	<hr />
	<a href="<?php echo url_for('contact/index') ?>">Retour à la liste</a> |
    <a href="<?php echo url_for('contact/edit?id='.$contact->getId()) ?>">Editer</a>
  </div>
</div>
