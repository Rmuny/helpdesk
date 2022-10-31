<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tickets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ticket'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tickets view content">
            <h3><?= h($ticket->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('TicketNumber') ?></th>
                    <td><?= h($ticket->ticketNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Answer') ?></th>
                    <td><?= h($ticket->answer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($ticket->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= $ticket->has('staff') ? $this->Html->link($ticket->staff->id, ['controller' => 'Staffs', 'action' => 'view', $ticket->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ticket->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reply') ?></h4>
                <?php if (!empty($ticket->reply)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Reply Id') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('Ticket Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ticket->reply as $reply) : ?>
                        <tr>
                            <td><?= h($reply->id) ?></td>
                            <td><?= h($reply->reply_id) ?></td>
                            <td><?= h($reply->message) ?></td>
                            <td><?= h($reply->ticket_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reply', 'action' => 'view', $reply->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reply', 'action' => 'edit', $reply->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reply', 'action' => 'delete', $reply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reply->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ticket Assign') ?></h4>
                <?php if (!empty($ticket->ticket_assign)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Deadline') ?></th>
                            <th><?= __('Priority') ?></th>
                            <th><?= __('Ticket Id') ?></th>
                            <th><?= __('Staff Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ticket->ticket_assign as $ticketAssign) : ?>
                        <tr>
                            <td><?= h($ticketAssign->id) ?></td>
                            <td><?= h($ticketAssign->deadline) ?></td>
                            <td><?= h($ticketAssign->priority) ?></td>
                            <td><?= h($ticketAssign->ticket_id) ?></td>
                            <td><?= h($ticketAssign->staff_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TicketAssign', 'action' => 'view', $ticketAssign->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TicketAssign', 'action' => 'edit', $ticketAssign->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TicketAssign', 'action' => 'delete', $ticketAssign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketAssign->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
