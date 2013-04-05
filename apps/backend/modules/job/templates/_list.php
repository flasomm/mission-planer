<table class="jobs">
  <?php foreach ($jobs as $i => $job): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>"> 
      <td class="date"><?php echo $job->getDateTimeObject('date_presentation')->format('d/m/Y H:m') ?></td>
		<td class="position">
			<a href="<?php echo url_for('job/show?id='.$job->getId()) ?>">
				<?php echo $job->getPosition() ?>
			</a>
		</td>
		<td class="client">
			<a href="<?php echo url_for('company/show?id='.$job->getClient()->getId()) ?>">
      		<?php echo $job->getClient()->getNom() ?>
			</a>
		</td>
      <td class="ville"><?php echo $job->getClient()->getVille() ?></td>
		<td class="company">
			<a href="<?php echo url_for('company/show?id='.$job->getFournisseur()->getId()) ?>">
      		<?php echo $job->getFournisseur()->getNom() ?>
			</a>
		</td>
    </tr>
  <?php endforeach ?>
</table>