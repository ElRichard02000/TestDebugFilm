<h2 class="text-center"><?= $film->name ?></h2>

<div class="row">
    <div class="col-lg-12">
        <u><b>Synopsis : </b></u> <?= $film->synopsis ?>
    </div>
</div>

<h2 class="text-center">Acteurs</h2>

<div class="row">
  <div class="col-lg-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($film->actors as $actor) : ?>
              <tr>
                  <td><?= $actor->lastname ?></td>
                  <td><?= $actor->firstname ?></td>
                  <td><?= $actor->birth_date->nice() ?></td>
              </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</div>
