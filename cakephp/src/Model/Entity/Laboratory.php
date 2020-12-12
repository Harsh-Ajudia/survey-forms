<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Laboratory Entity
 *
 * @property int $id
 * @property string|null $laboratoryCode
 * @property string|null $laboratoryName
 * @property string|null $nameOfFaculty
 * @property string|null $semester
 * @property string|null $course
 * @property string|null $ans1
 * @property string|null $ans2
 * @property string|null $ans3
 * @property string|null $ans4
 * @property string|null $ans5
 * @property string|null $ans6
 * @property string|null $ans7
 * @property string|null $ans8
 * @property string|null $ans9
 * @property string|null $ans10
 * @property string|null $ans11
 */
class Laboratory extends Entity
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
        'laboratoryCode' => true,
        'laboratoryName' => true,
        'nameOfFaculty' => true,
        'semester' => true,
        'course' => true,
        'ans1' => true,
        'ans2' => true,
        'ans3' => true,
        'ans4' => true,
        'ans5' => true,
        'ans6' => true,
        'ans7' => true,
        'ans8' => true,
        'ans9' => true,
        'ans10' => true,
        'ans11' => true,
    ];
}
