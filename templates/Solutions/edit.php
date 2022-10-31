<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solution $solution
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solution->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solution->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Solutions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solutions form content">
            <?= $this->Form->create($solution) ?>
            <fieldset>
                <legend><?= __('Edit Solution') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('content');
                    echo $this->Form->control('category_id', ['options' => $categories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
