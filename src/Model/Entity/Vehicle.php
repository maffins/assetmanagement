<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehicle Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $modified_by
 * @property string $dna_id_code
 * @property string $battery_serial_number
 * @property string $registration_number
 * @property string $engine_number
 * @property string $chassis_number
 * @property string $make
 * @property string $model
 * @property string $color
 * @property string $year
 * @property string $kilometer
 * @property \Cake\I18n\Time $service_due_date
 * @property \Cake\I18n\Time $warranty_expiry_date
 * @property string $certificate
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Maintenance[] $maintenances
 */
class Vehicle extends Entity
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
}
