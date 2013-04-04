<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $job->getId() ?></td>
    </tr>
    <tr>
      <th>Date presentation:</th>
      <td><?php echo $job->getDatePresentation() ?></td>
    </tr>
    <tr>
      <th>Position:</th>
      <td><?php echo $job->getPosition() ?></td>
    </tr>
    <tr>
      <th>Tjm:</th>
      <td><?php echo $job->getTjm() ?></td>
    </tr>
    <tr>
      <th>Client:</th>
      <td><?php echo $job->getClientId() ?></td>
    </tr>
    <tr>
      <th>Statut:</th>
      <td><?php echo $job->getStatut() ?></td>
    </tr>
    <tr>
      <th>Commentaire:</th>
      <td><?php echo $job->getCommentaire() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $job->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $job->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job/edit?id='.$job->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>">List</a>
