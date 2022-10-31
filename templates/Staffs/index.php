<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Staff> $staffs
 *
 */
$this->Html->script('bootstrapModal',['block'=>true]);
$this->Html->css('nav');
?>
<div class="container-fluid">
    <!--        <div class="card-header">-->
    <div class="roles index content">
        <div class="d-inline float-end">
            <?= $this->Html->link('<span class="fas fa-plus-circle text-white"></span><span class="ms-2 text-white">' . __('Add staff') . '</span>', ['action' => 'add'],
                ['escape' => false, 'class' => 'btn btn-success']) ?>
        </div>
        <h3><?= __('Staffs' ) ?></h3>
    </div>
</div>
<!--            //search-->

<div class="d-inline">
    <?= $this->Form->create(null,['type'=>'get'])?>
    <div class="d-inline-flex">
        <?= $this->Form->control('key',[
            'label'=>false,
            'placeholder' => 'Search...',
            'value'=>$this->request->getQuery('key')
        ])?>
        <?= $this->Form->submit(
            'search'

        );?>
        <?= $this->Form->end()?>
    </div>
</div>

<div class="table-responsive" style="padding-left: 10px">
    <div >
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr >
                <th ><?= $this->Paginator->sort('N') ?></th>
                <th ><?= $this->Paginator->sort('Full Name') ?></th>
                <th ><?= $this->Paginator->sort('email') ?></th>
                <th ><?= $this->Paginator->sort('phone') ?></th>
                <th ><?= $this->Paginator->sort('username') ?></th>
                <th ><?= $this->Paginator->sort('role_id') ?></th>
                <th ><?= $this->Paginator->sort('category_id') ?></th>
                <th><?= $this->Paginator->sort('profile') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($staffs as $staff): ?>
                <tr>
                    <td>1</td>
                    <td><?= h($staff->staffName) ?></td>
                    <td><?= h($staff->email) ?></td>
                    <td><?= h($staff->phoneNumber) ?></td>
                    <td><?= h($staff->username) ?></td>
                    <td><?= $staff->has('role') ? $this->Html->link($staff->role->name, ['controller' => 'Roles', 'action' => 'view', $staff->role->id]) : '' ?></td>
                    <td><?= $staff->has('category') ? $this->Html->link($staff->category->name, ['controller' => 'Categories', 'action' => 'view', $staff->category->id]) : '' ?></td>

                    <div class="navprofile">
                        <td ><?= $this->Html->image($staff->profileImage) ?></td>
                    </div>
                    <td class="actions">
                        <?= $this->Html->link(
                            '<span class="fa fa-eye"></span>View<span class="sr-only">' . __('View') . '</span>',
                            ['action' => 'view', $staff->id],
                            ['escape' => false, 'title' => __('View'), 'class'=>'btn text-white', 'style' => 'background-color: green']
                        ) ?>
                        <?= $this->Html->link(
                            '<span class="fa fa-edit"></span>Edit<span class="sr-only">' . __('Edit') . '</span>',
                            ['action' => 'edit', $staff->id],
                            ['escape' => false, 'title' => __('Edit'), 'class'=>'btn text-white', 'style' => 'background-color: blue']
                        ) ?>
                                                    <?php $this->Form->setTemplates([
                                                        'confirmJs' => 'addToModal("{{formName}}"); return false;'
                                                    ]); ?>
                        <?= $this->Form->postlink(
                            '<span class="fa fa-trash"></span>Delete<span class="sr-only">' . __('delete') . '</span>',
                            ['action' => 'delete', $staff->id],
                            ['escape' => false, 'title' => __('delete'), 'class'=>'btn text-white', 'style' => 'background-color: red',
                                'confirm' => __('Are you sure want to delete staff # {0}?',$staff->staffName),
                                'data-bs-toggle'=>"modal",
                                'data-bs-target'=>"#bootstrapModal"
                            ],
                        ) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?=$this->Form->end()?>
</div>

<nav aria-label="Page navigation example">
    <?php
    $this->Paginator->setTemplates([
        'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'prevDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'current' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    ]);
    ?>
    <div class="mx-auto">
        <nav aria-label="Page navigation">
            <ul class="pagination ">
                <?= $this->Paginator->prev('previous') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('next') ?>
            </ul>
        </nav>
        <div class="float-end" >
        <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
        </div>
        </div>
</nav>


<div class="modal" id="bootstrapModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="confirmMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="ok">OK</button>
            </div>
        </div>
    </div>
</div>
