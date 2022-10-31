<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($category->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($category->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($category->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($category->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Solutions') ?></h4>
                <?php if (!empty($category->solutions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Content') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->solutions as $solutions) : ?>
                        <tr>
                            <td><?= h($solutions->id) ?></td>
                            <td><?= h($solutions->title) ?></td>
                            <td><?= h($solutions->content) ?></td>
                            <td><?= h($solutions->category_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Solutions', 'action' => 'view', $solutions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Solutions', 'action' => 'edit', $solutions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Solutions', 'action' => 'delete', $solutions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solutions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Staffs') ?></h4>
                <?php if (!empty($category->staffs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('StaffName') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('PhoneNumber') ?></th>
                            <th><?= __('ProfileImage') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->staffs as $staffs) : ?>
                        <tr>
                            <td><?= h($staffs->id) ?></td>
                            <td><?= h($staffs->staffName) ?></td>
                            <td><?= h($staffs->gender) ?></td>
                            <td><?= h($staffs->email) ?></td>
                            <td><?= h($staffs->phoneNumber) ?></td>
                            <td><?= h($staffs->profileImage) ?></td>
                            <td><?= h($staffs->username) ?></td>
                            <td><?= h($staffs->password) ?></td>
                            <td><?= h($staffs->category_id) ?></td>
                            <td><?= h($staffs->role_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Staffs', 'action' => 'view', $staffs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Staffs', 'action' => 'edit', $staffs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Staffs', 'action' => 'delete', $staffs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffs->id)]) ?>
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
