<h1>Liste des entreprises</h1>

<?php use_stylesheet('jobs.css') ?>

<div id="jobs">
  <table class="jobs">
    <?php foreach ($companys as $i => $company): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td class="location">
			<a href="<?php echo url_for('company/show?id='.$company->getId()) ?>">
				<?php echo $company->getNom() ?>
			</a>
		</td>
        <td class="telephone">
			<?php echo $company->getTelephone() ?>
        </td>
        <td class="ville_right"><?php echo $company->getVille() ?></td>
      </tr>
    <?php endforeach ?>
  </table>

  <div style="padding: 20px 0">
	<hr />
 	<a href="<?php echo url_for('company/new') ?>">Ajouter une entreprise</a>
  </div>
</div>
