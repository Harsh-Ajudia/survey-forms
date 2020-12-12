<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TeachingLearning Entity
 *
 * @property int $id
 * @property string|null $passingYear
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
 * @property string|null $ans12
 * @property string|null $ans13
 * @property string|null $ans14
 * @property string|null $ans15
 * @property string|null $ans16
 * @property string|null $ans17
 */
class TeachingLearning extends Entity
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
        'passingYear' => true,
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
        'ans12' => true,
        'ans13' => true,
        'ans14' => true,
        'ans15' => true,
        'ans16' => true,
        'ans17' => true,
    ];
}
