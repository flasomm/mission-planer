<h1>Positions List</h1>

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
</div>

  <a href="<?php echo url_for('position/new') ?>">New</a>
