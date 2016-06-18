<?php
namespace App\Model\Table;

use App\Model\Entity\Stolen;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stolen Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Assets
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class StolenTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('stolen');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Assets', [
            'foreignKey' => 'asset_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('stolen_area', 'create')
            ->notEmpty('stolen_area');

        $validator
            ->date('date_stolen')
            ->requirePresence('date_stolen', 'create')
            ->notEmpty('date_stolen');

        $validator
            ->boolean('reported')
            ->requirePresence('reported', 'create')
            ->notEmpty('reported');

        $validator
            ->requirePresence('station_name', 'create')
            ->notEmpty('station_name');

        $validator
            ->requirePresence('case_number', 'create')
            ->notEmpty('case_number');

        $validator
            ->requirePresence('investigation_office', 'create')
            ->notEmpty('investigation_office');

        $validator
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone');

        $validator
            ->requirePresence('cellphone', 'create')
            ->notEmpty('cellphone');

        $validator
            ->requirePresence('comments', 'create')
            ->notEmpty('comments');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['asset_id'], 'Assets'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
