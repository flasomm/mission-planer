<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $contact->getId() ?></td>
    </tr>
    <tr>
      <th>Nom:</th>
      <td><?php echo $contact->getNom() ?></td>
    </tr>
    <tr>
      <th>Prenom:</th>
      <td><?php echo $contact->getPrenom() ?></td>
    </tr>
    <tr>
      <th>Position:</th>
      <td><?php echo $contact->getPosition() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $contact->getEmail() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $contact->getCompanyId() ?></td>
    </tr>
    <tr>
      <th>Telephone:</th>
      <td><?php echo $contact->getTelephone() ?></td>
    </tr>
    <tr>
      <th>Mobile:</th>
      <td><?php echo $contact->getMobile() ?></td>
    </tr>
    <tr>
      <th>Commentaire:</th>
      <td><?php echo $contact->getCommentaire() ?></td>
    </tr>
    <tr>
      <th>Rappel:</th>
      <td><?php echo $contact->getRappel() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $contact->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $contact->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('contact/edit?id='.$contact->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('contact/index') ?>">List</a>
