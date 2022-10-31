<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property string $ticketNumber
 * @property string $answer
 * @property string $status
 * @property int $staff_id
 *
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\Reply[] $reply
 * @property \App\Model\Entity\TicketAssign[] $ticket_assign
 */
class Ticket extends Entity
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
        'ticketNumber' => true,
        'answer' => true,
        'status' => true,
        'staff_id' => true,
        'staff' => true,
        'reply' => true,
        'ticket_assign' => true,
    ];
}
