<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solution $solution
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Solution'), ['action' => 'edit', $solution->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Solution'), ['action' => 'delete', $solution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solution->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Solutions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Solution'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solutions view content">
            <h3><?= h($solution->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($solution->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($solution->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $solution->has('category') ? $this->Html->link($solution->category->id, ['controller' => 'Categories', 'action' => 'view', $solution->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($solution->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
