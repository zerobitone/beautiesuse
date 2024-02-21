<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DoctorsRegistration $doctorsRegistration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doctorsRegistration->doctor_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsRegistration->doctor_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Doctors Registration'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctorsRegistration form content">
            <?= $this->Form->create($doctorsRegistration) ?>
            <fieldset>
                <legend><?= __('Edit Doctors Registration') ?></legend>
                <?php
                    echo $this->Form->control('registration_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
