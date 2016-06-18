<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stolen Entity.
 *
 * @property int $id
 * @property int $asset_id
 * @property \App\Model\Entity\Asset $asset
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $stolen_area
 * @property \Cake\I18n\Time $date_stolen
 * @property bool $reported
 * @property string $station_name
 * @property string $case_number
 * @property string $investigation_office
 * @property string $telephone
 * @property string $cellphone
 * @property string $comments
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Stolen extends Entity
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
