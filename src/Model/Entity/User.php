<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property int $user_type_id
 * @property \App\Model\Entity\UserType $user_type
 * @property string $fname
 * @property string $lname
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $employee_number
 * @property string $cellphone
 * @property string $permissions
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Asset[] $assets
 * @property \App\Model\Entity\AssetsType[] $assets_types
 * @property \App\Model\Entity\AuditTrail[] $audit_trails
 * @property \App\Model\Entity\CashFlow[] $cash_flows
 * @property \App\Model\Entity\Driver[] $drivers
 * @property \App\Model\Entity\Maintenance[] $maintenances
 * @property \App\Model\Entity\Receipt[] $receipts
 * @property \App\Model\Entity\Sale[] $sales
 * @property \App\Model\Entity\Stolen[] $stolen
 * @property \App\Model\Entity\Vehicle[] $vehicles
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
