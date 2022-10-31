<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reply Entity
 *
 * @property int $id
 * @property string $reply_id
 * @property string $message
 * @property int $ticket_id
 *
 * @property \App\Model\Entity\Ticket $ticket
 * @property \App\Model\Entity\Reply[] $reply
 */
class Reply extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'reply_id' => true,
        'message' => true,
        'ticket_id' => true,
        'ticket' => true,
        'reply' => true,
    ];
}
