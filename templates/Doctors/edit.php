<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 * @var string[]|\Cake\Collection\CollectionInterface $recipients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doctor->doctor_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->doctor_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Doctors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctors form content">
            <?= $this->Form->create($doctor) ?>
            <fieldset>
                <legend><?= __('Edit Doctor') ?></legend>
                <?php
                    echo $this->Form->control('doctor_lastname');
                    echo $this->Form->control('doctor_firstname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('avatar_path');
                    echo $this->Form->control('recipients._ids', ['options' => $recipients]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
