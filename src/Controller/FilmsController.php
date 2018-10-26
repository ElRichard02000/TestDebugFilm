<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;


class FilmsController extends AppController
{
    public function index()
    {
        $films = TableRegistry::getTableLocator()->get('Films')
            ->find()
            ->contain([
              'Actors'
            ]);

        $this->set(compact('films'));
    }

    public function view($film_id)
    {


        $film = $this->Films->get($film_id, [
            'contain' => ['Actors']
        ]);

        /*$filmActor = $this->FilmsActors->get($film->id, [
            'contain' => []
        ]);*/





        /*$film = TableRegistry::getTableLocator()->get('Films')
          ->find()
          ->contain([
            'Actors'
          ])
         ->where(['Films.id' => $film_id]
          ->where(['Films.id' => $film_id]);*/

      $this->set(compact('film'));
    }
}
