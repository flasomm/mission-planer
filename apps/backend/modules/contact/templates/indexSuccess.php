<h1>Liste des contacts</h1>

<?php use_stylesheet('jobs.css') ?>

<div id="jobs">
  <table class="jobs">
    <?php foreach ($contacts as $i => $contact): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>"> 
      <td class="nom">
			<a href="<?php echo url_for('contact/show?id='.$contact->getId()) ?>">
				<?php echo $contact->getNom() ?>
			</a>
		</td>
        <td class="nom"><?php echo $contact->getPrenom() ?></td>
        <td class="position"><?php echo $contact->getPosition() ?></td>
        <td class="telephone"><?php echo $contact->getMobile() ?></td>
        <td class="company">
			<a href="<?php echo url_for('company/show?id='.$contact->getCompany()->getId()) ?>">
				<?php echo $contact->getCompany()->getNom() ?>
			</a>
		</td>
      </tr>
    <?php endforeach ?>
  </table>

  <div style="padding: 20px 0">
	<hr />
 	<a href="<?php echo url_for('contact/new') ?>">Ajouter un contact</a>
  </div>
</div>
