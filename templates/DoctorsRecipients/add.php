<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DoctorsRecipient $doctorsRecipient
 * @var \Cake\Collection\CollectionInterface|string[] $doctors
 * @var \Cake\Collection\CollectionInterface|string[] $recipients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Doctors Recipients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctorsRecipients form content">
            <?= $this->Form->create($doctorsRecipient) ?>
            <fieldset>
                <legend><?= __('Add Doctors Recipient') ?></legend>
                <?php
                    echo $this->Form->control('referral_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
