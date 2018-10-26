<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ActorsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('Actors');
        $this->setPrimaryKey('id');

         $this->hasMany('Films', [
          'joinTable' => 'films_actors'
         ]);
    }
}
