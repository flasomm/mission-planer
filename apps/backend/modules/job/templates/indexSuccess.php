<h1>Les missions</h1>

<?php use_stylesheet('jobs.css') ?>
 
<div id="jobs">
  <table class="jobs">
    <?php foreach ($jobs as $i => $job): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td class="date_presentation"><?php echo $job->getCompany()->getVille() ?></td>
		<td class="position">
			<a href="<?php echo url_for('job/show?id='.$job->getId()) ?>">
				<?php echo $job->getPosition() ?>
			</a>
		</td>
        <td class="location"><?php echo $job->getCompany()->getVille() ?></td>
		<td class="company">
			<a href="<?php echo url_for('company/show?id='.$job->getCompany()->getId()) ?>">
        		<?php echo $job->getCompany()->getNom() ?>
			</a>
		</td>
      </tr>
    <?php endforeach ?>
  </table>
</div>

<a href="<?php echo url_for('job/new') ?>">Ajouter une mission</a>
