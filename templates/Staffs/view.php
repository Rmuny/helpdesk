<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
echo $this->Html->css('viewstyle');


?>
<div id="page">

            <div id="page">
                <div id="header">
                    <div class="center">
                    <div class="profile">
                        <?= $this->Html->image($staff->profileImage) ?><br>
                        <div class="name">
                        <?= h($staff->staffName) ?></div>
                    </div>
                    </div>
                </div>
                <div id="content">
                    <table>
                        <tr>
                            <td style="width: 130px;"><?= __('Id:') ?></td>
                            <td><?= $this->Number->format($staff->id) ?></td>

                            <td style="width: 130px;"><?= __('Full Name:') ?></td>
                            <td><?= h($staff->staffName) ?>
                            </td>

                        </tr>

                        <tr>
                            <td><?= __('Gender:') ?></td>
                            <td><?= h($staff->gender) ?>
                            </td>

                            <td><?= __('Email:') ?></td>
                            <td><?= h($staff->email) ?>
                            </td>

                        </tr>

                        <tr>
                            <td><?= __('Phone Number:') ?></td>
                            <td><?= h($staff->phoneNumber) ?>
                            </td>

                            <td><?= __('Username:') ?></td>
                            <td><?= h($staff->username) ?>
                            </td>
                        </tr>

                        <tr>
                            <td><?= __('Role:') ?></td>
                            <td><?= $staff->has('role') ? $this->Html->link($staff->role->name, ['controller' => 'Roles', 'action' => 'view', $staff->role->id]) : '' ?>
                            </td>

                            <td><?= __('Category:') ?></td>
                            <td><?= $staff->has('category') ? $this->Html->link($staff->category->name, ['controller' => 'Categories', 'action' => 'view', $staff->category->id]) : '' ?>
                            </td>


                        </tr>

                    </table>
                </div>
                </div>
            </div>





