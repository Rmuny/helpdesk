<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Solution> $solutions
 */
?>
<div class="solutions index content">
    <?= $this->Html->link(__('New Solution'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Solutions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('content') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solutions as $solution): ?>
                <tr>
                    <td><?= $this->Number->format($solution->id) ?></td>
                    <td><?= h($solution->title) ?></td>
                    <td><?= h($solution->content) ?></td>
                    <td><?= $solution->has('category') ? $this->Html->link($solution->category->id, ['controller' => 'Categories', 'action' => 'view', $solution->category->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $solution->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solution->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solution->id)]) ?>
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
