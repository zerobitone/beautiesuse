<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DoctorsRecipient $doctorsRecipient
 * @var string[]|\Cake\Collection\CollectionInterface $doctors
 * @var string[]|\Cake\Collection\CollectionInterface $recipients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doctorsRecipient->doctor_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsRecipient->doctor_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Doctors Recipients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctorsRecipients form content">
            <?= $this->Form->create($doctorsRecipient) ?>
            <fieldset>
                <legend><?= __('Edit Doctors Recipient') ?></legend>
                <?php
                    echo $this->Form->control('referral_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
