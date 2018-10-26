<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class FilmsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('films');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Actors', [
          'joinTable' => 'films_actors',
          'foreignKey' => 'film_id',
          'targetForeignKey' => 'actor_id'
        ]);
    }
}
