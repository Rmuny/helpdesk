<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reply $reply
 * @var \Cake\Collection\CollectionInterface|string[] $tickets
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Reply'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reply form content">
            <?= $this->Form->create($reply) ?>
            <fieldset>
                <legend><?= __('Add Reply') ?></legend>
                <?php
                    echo $this->Form->control('reply_id');
                    echo $this->Form->control('message');
                    echo $this->Form->control('ticket_id', ['options' => $tickets]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
