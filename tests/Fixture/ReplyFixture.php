<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReplyFixture
 */
class ReplyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'reply';
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
                'reply_id' => 'Lorem ipsum dolor sit amet',
                'message' => 'Lorem ipsum dolor sit amet',
                'ticket_id' => 1,
            ],
        ];
        parent::init();
    }
}
