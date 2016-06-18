<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Asset Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $modified_by
 * @property int $asset_type_id
 * @property \App\Model\Entity\AssetType $asset_type
 * @property string $allocation
 * @property float $asset_value
 * @property string $status
 * @property \Cake\I18n\Time $craeted
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Stolen[] $stolen
 */
class Asset extends Entity
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
