<h1>Liste des contacts</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Position</th>
      <th>Email</th>
      <th>Company</th>
      <th>Telephone</th>
      <th>Mobile</th>
      <th>Commentaire</th>
      <th>Rappel</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contacts as $contact): ?>
    <tr>
      <td><a href="<?php echo url_for('contact/show?id='.$contact->getId()) ?>"><?php echo $contact->getId() ?></a></td>
      <td><?php echo $contact->getNom() ?></td>
      <td><?php echo $contact->getPrenom() ?></td>
      <td><?php echo $contact->getPosition() ?></td>
      <td><?php echo $contact->getEmail() ?></td>
      <td><?php echo $contact->getCompanyId() ?></td>
      <td><?php echo $contact->getTelephone() ?></td>
      <td><?php echo $contact->getMobile() ?></td>
      <td><?php echo $contact->getCommentaire() ?></td>
      <td><?php echo $contact->getRappel() ?></td>
      <td><?php echo $contact->getCreatedAt() ?></td>
      <td><?php echo $contact->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('contact/new') ?>">Ajouter un contact</a>
