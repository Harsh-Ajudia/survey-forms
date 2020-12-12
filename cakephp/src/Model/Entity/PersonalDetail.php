<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PersonalDetail Entity
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property int|null $country
 * @property string|null $mobileNumber
 */
class PersonalDetail extends Entity
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
        'firstName' => true,
        'lastName' => true,
        'email' => true,
        'country' => true,
        'mobileNumber' => true,
    ];
}
