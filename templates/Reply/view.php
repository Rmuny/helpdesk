<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reply $reply
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reply'), ['action' => 'edit', $reply->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reply'), ['action' => 'delete', $reply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reply->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reply'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reply'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reply view content">
            <h3><?= h($reply->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reply Id') ?></th>
                    <td><?= h($reply->reply_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($reply->message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ticket') ?></th>
                    <td><?= $reply->has('ticket') ? $this->Html->link($reply->ticket->id, ['controller' => 'Tickets', 'action' => 'view', $reply->ticket->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reply->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reply') ?></h4>
                <?php if (!empty($reply->reply)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Reply Id') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('Ticket Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($reply->reply as $reply) : ?>
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
        </div>
    </div>
</div>
