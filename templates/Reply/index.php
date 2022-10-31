<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reply> $reply
 */
?>
<div class="reply index content">
    <?= $this->Html->link(__('New Reply'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reply') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('reply_id') ?></th>
                    <th><?= $this->Paginator->sort('message') ?></th>
                    <th><?= $this->Paginator->sort('ticket_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reply as $reply): ?>
                <tr>
                    <td><?= $this->Number->format($reply->id) ?></td>
                    <td><?= h($reply->reply_id) ?></td>
                    <td><?= h($reply->message) ?></td>
                    <td><?= $reply->has('ticket') ? $this->Html->link($reply->ticket->id, ['controller' => 'Tickets', 'action' => 'view', $reply->ticket->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reply->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reply->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reply->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
