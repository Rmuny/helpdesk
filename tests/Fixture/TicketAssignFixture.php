<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketAssignFixture
 */
class TicketAssignFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ticket_assign';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'deadline' => '2022-10-12',
                'priority' => 'Lorem ipsum dolor sit amet',
                'ticket_id' => 1,
                'staff_id' => 1,
            ],
        ];
        parent::init();
    }
}
