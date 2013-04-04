<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $position->getId() ?></td>
    </tr>
    <tr>
      <th>Titre:</th>
      <td><?php echo $position->getTitre() ?></td>
    </tr>
    <tr>
      <th>Commentaire:</th>
      <td><?php echo $position->getCommentaire() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $position->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $position->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('position/edit?id='.$position->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('position/index') ?>">List</a>
