<?php
namespace App\Model\Table;

use App\Model\Entity\Vehicle;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vehicles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $Maintenances
 */
class VehiclesTable extends Table
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

        $this->table('vehicles');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Maintenances', [
            'foreignKey' => 'vehicle_id'
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
            ->integer('modified_by')
            ->requirePresence('modified_by', 'create')
            ->allowEmpty('modified_by');

        $validator
            ->requirePresence('dna_id_code', 'create')
            ->notEmpty('dna_id_code');

        $validator
            ->requirePresence('battery_serial_number', 'create')
            ->notEmpty('battery_serial_number');

        $validator
            ->requirePresence('registration_number', 'create')
            ->notEmpty('registration_number');

        $validator
            ->requirePresence('engine_number', 'create')
            ->notEmpty('engine_number');

        $validator
            ->requirePresence('chassis_number', 'create')
            ->notEmpty('chassis_number');

        $validator
            ->requirePresence('make', 'create')
            ->notEmpty('make');

        $validator
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->requirePresence('color', 'create')
            ->notEmpty('color');

        $validator
            ->requirePresence('year', 'create')
            ->notEmpty('year');

        $validator
            ->requirePresence('kilometer', 'create')
            ->notEmpty('kilometer');

        $validator
            ->date('service_due_date')
            ->requirePresence('service_due_date', 'create')
            ->notEmpty('service_due_date');

        $validator
            ->date('warranty_expiry_date')
            ->requirePresence('warranty_expiry_date', 'create')
            ->notEmpty('warranty_expiry_date');

        $validator
            ->requirePresence('certificate', 'create')
            ->notEmpty('certificate');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
