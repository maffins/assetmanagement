<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $UserTypes
 * @property \Cake\ORM\Association\HasMany $Assets
 * @property \Cake\ORM\Association\HasMany $AssetsTypes
 * @property \Cake\ORM\Association\HasMany $AuditTrails
 * @property \Cake\ORM\Association\HasMany $CashFlows
 * @property \Cake\ORM\Association\HasMany $Drivers
 * @property \Cake\ORM\Association\HasMany $Maintenances
 * @property \Cake\ORM\Association\HasMany $Receipts
 * @property \Cake\ORM\Association\HasMany $Sales
 * @property \Cake\ORM\Association\HasMany $Stolen
 * @property \Cake\ORM\Association\HasMany $Vehicles
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('fname');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserTypes', [
            'foreignKey' => 'user_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Assets', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('AssetsTypes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('AuditTrails', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CashFlows', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Drivers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Maintenances', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Receipts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Sales', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Stolen', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Vehicles', [
            'foreignKey' => 'user_id'
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
            ->requirePresence('fname', 'create')
            ->notEmpty('fname');

        $validator
            ->requirePresence('lname', 'create')
            ->notEmpty('lname');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('employee_number', 'create')
            ->notEmpty('employee_number');

        $validator
            ->requirePresence('cellphone', 'create')
            ->notEmpty('cellphone');

        $validator
            ->requirePresence('permissions', 'create')
            ->allowEmpty('permissions');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_type_id'], 'UserTypes'));
        return $rules;
    }
}
