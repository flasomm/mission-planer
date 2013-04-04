<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $company->getId() ?></td>
    </tr>
    <tr>
      <th>Nom:</th>
      <td><?php echo $company->getNom() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $company->getLogo() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $company->getUrl() ?></td>
    </tr>
    <tr>
      <th>Telephone:</th>
      <td><?php echo $company->getTelephone() ?></td>
    </tr>
    <tr>
      <th>Adresse:</th>
      <td><?php echo $company->getAdresse() ?></td>
    </tr>
    <tr>
      <th>Code postal:</th>
      <td><?php echo $company->getCodePostal() ?></td>
    </tr>
    <tr>
      <th>Ville:</th>
      <td><?php echo $company->getVille() ?></td>
    </tr>
    <tr>
      <th>Commentaire:</th>
      <td><?php echo $company->getCommentaire() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $company->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $company->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('company/edit?id='.$company->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('company/index') ?>">List</a>
