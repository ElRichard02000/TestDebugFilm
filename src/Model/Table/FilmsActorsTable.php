<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class FilmsActorsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('films_actors');
        $this->setPrimaryKey('id');

         $this->hasOne('Actors', [
           'foreignKey' => 'actor_id',
          'propertyName' => 'actor'
        ]);

         $this->hasOne('Films', [
           'foreignKey' => 'film_id',
           'propertyName' => 'film'
         ]);
    }
}
