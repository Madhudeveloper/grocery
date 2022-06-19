<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SocialLink Entity
 *
 * @property int $id
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $instagram_link
 * @property string $linkedin_link
 * @property string $pintrest_link
 * @property string $youtube_link
 * @property string $reserved_text
 * @property string $company_name
 * @property string $address
 * @property int $gst
 * @property string $email_address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Email $email
 */
class SocialLink extends Entity
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
        'facebook_link' => true,
        'twitter_link' => true,
        'instagram_link' => true,
        'linkedin_link' => true,
        'pintrest_link' => true,
        'youtube_link' => true,
        'reserved_text' => true,
        'company_name' => true,
        'address' => true,
        'gst' => true,
        'email_address' => true,
        'created' => true,
        'modified' => true,
        'email' => true,
    ];
}
