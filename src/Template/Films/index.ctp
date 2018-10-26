<h2 class="text-center">Films</h2>
<div class="row">
  <div class="col-lg-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Titre du film</th>
            <th>Date de sortie</th>
            <th>Réalisateur</th>
            <th>Synopsis</th>
            <th>Fiche</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($films as $film) : ?>
              <tr>
                <td><?= $film->name ?></td>
                <td><?= $film->release_date->nice() ?></td>
                <td><?= $film->director ?></td>
                <td><?= $film->synopsis ?></td>
                <td><?= $this->Html->link('Voir la fiche', ['controller' => 'Films', 'action' => 'view', $film->id]) ?></td>
              </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</div>
