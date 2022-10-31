<?php
/**
 * @var \App\View\AppView $this
 * @var \App\View\AppView $form
 * @var \App\Model\Entity\Staff $staff
 * @var \App\Model\Entity\Staff $gender

 * @var \Cake\Collection\CollectionInterface|string[] $categories
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */

?>
<style>
    input[type='email']{
        border-radius: 0rem;
    }
</style>
<div class="row">
    <div class="column-responsive column-80">
        <div class="staffs form content">

            <?= $this->Form->create($staff,['type'=>'file']) ?>
            <H3>Add New Staff</H3>

            <fieldset>
                <table>
                    <tr>
                        <td>
                            <?php
                            echo $this->Form->control('staffName:',[
                            'label'=>'Full Name:']); ?>
                        </td>
                        <td>
                            <label>Gender: </label>
                            <?php
                            echo $this->Form->control('gender', [
                                'type'=>'radio',
                                'label'=>false,
                                'options'=>['Male'=>'Male','Female'=>'Female'],

                            ]);
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <?php
                            echo $this->Form->control('email:');
                            ?>
                        </td>

                        <td>
                            <?php
                            echo $this->Form->control('phoneNumber:');
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <?php
                            echo $this->Form->control('username');
                            ?>

                        </td>
                        <td>
                            <label>Profile: </label>


                        </td>
                    </tr>

                    <tr>
                        <td>
                            <?php
                            echo $this->Form->control('role_id', [
                                'options' => $roles, 'empty' => true,

                            ]);
                            ?>
                        </td>
                        <td>

                        </td>
                    </tr>

              <tr>
                <td>
                    <?php
                    echo $this->Form->control('password',[
                        'placeholder'=>'********'
                    ]);
                    ?>
                </td>
                <td>
                    <?php
                    echo $this->Form->control('comfirm_password',[
                        'type'=>'password',
                        'placeholder'=>'********'

                    ]);
                    ?>
                </td>
              </tr>
                </table>
            </fieldset>
            <?= $this->Form->button(__('Submit'),[
                'label'=>'Save'

            ]) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div>


