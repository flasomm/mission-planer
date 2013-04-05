<h1>Liste des Positions</h1>

<?php use_stylesheet('jobs.css') ?>
 
<div id="jobs">
  <table class="jobs">
    <?php foreach ($positions as $i => $position): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td class="position">
          <a href="<?php echo url_for('position/show?id='.$position->getId()) ?>">
            <?php echo $position->getTitre() ?>
          </a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>

  <div style="padding: 20px 0">
	<hr />
 	<a href="<?php echo url_for('position/new') ?>">Ajouter une position</a>
  </div>
</div>

 
