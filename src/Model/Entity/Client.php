<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $street
 * @property string $surbub
 * @property int $code
 * @property string $contact_number
 * @property string $contact_person
 * @property string $contact_email
 * @property string $contact_alt_number
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Client extends Entity
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
