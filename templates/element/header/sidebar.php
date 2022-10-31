<?php
/**
 * @var \App\View\AppView $this
 * @var $permissions
 * @var $login
 */
$status = $this->getRequest()->getQuery('status');
$date = $this->getRequest()->getQuery('date');
$ctrl = $this->getRequest()->getParam('controller');
$action = [];
if (isset($permissions))
{
//    foreach ($permissions->acos as $permission) {
//        $action[] = $permission['alias'];
//    }
}
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <?php

                    echo $this->Html->link('<span class="fas fa-user m-2"></span><span class="ml-2 text-white-50"> ' . __('Dashboard') . '</span>',
                        ['controller' => 'Staffs', 'action' => 'index', 'plugin' => false, 'prefix' => false],
                        ['escape' => false, 'class' => 'nav-link']
                    );
                    ?>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-astronaut text-white"></i></div>
                        <?= __('Admin') ?>
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <!-- Order -->
                            <?php

                            echo $this->Html->link('<span class="fas fa-user m-2"></span><span class="ml-2 text-white-50"> ' . __('Staffs') . '</span>',
                                ['controller' => 'Staffs', 'action' => 'index', 'plugin' => false, 'prefix' => false],
                                ['escape' => false, 'class' => 'nav-link']
                            );

                            echo $this->Html->link('<span class="fas fa-address-card m-2"></span><span class="ml-2 text-white-50"> ' . __('Categories') . '</span>',
                                ['controller' => 'Categories', 'action' => 'index', 'plugin' => false, 'prefix' => false],
                                ['escape' => false, 'class' => 'nav-link']
                            );

                            echo $this->Html->link('<span class="fas fa-star"></span><span class="ml-2 text-white-50"> ' . __('Status') . '</span>',
                                ['controller' => 'Status', 'action' => 'index', 'plugin' => false, 'prefix' => false],
                                ['escape' => false, 'class' => 'nav-link']
                            );

                            echo $this->Html->link('<span class="fas fa-address-card m-2"></span><span class="ml-2 text-white-50"> ' . __('Solution') . '</span>',
                                ['controller' => 'Permissions', 'action' => 'index', 'plugin' => false, 'prefix' => false],
                                ['escape' => false, 'class' => 'nav-link']
                            );
                            echo $this->Html->link('<span class="fas fa-address-card m-2"></span><span class="ml-2 text-white-50"> ' . __('Role') . '</span>',
                                ['controller' => 'Roles', 'action' => 'index', 'plugin' => false, 'prefix' => false],
                                ['escape' => false, 'class' => 'nav-link']
                            );

                            ?>
                        </nav>

                    </div>
                    <?php

                    echo $this->Html->link('<span class="fas fa-user m-2"></span><span class="ml-2 text-white-50"> ' . __('Report') . '</span>',
                        ['controller' => 'Staffs', 'action' => 'index', 'plugin' => false, 'prefix' => false],
                        ['escape' => false, 'class' => 'nav-link']
                    );
                    ?>
                </div>
            </div>
        </nav>
    </div>
