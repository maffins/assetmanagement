<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maintenance Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $modified_by
 * @property int $vehicle_id
 * @property \App\Model\Entity\Vehicle $vehicle
 * @property int $dealer_id
 * @property \App\Model\Entity\Dealer $dealer
 * @property string $contact_number
 * @property int $reciept_id
 * @property \App\Model\Entity\Reciept $reciept
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Maintenance extends Entity
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
