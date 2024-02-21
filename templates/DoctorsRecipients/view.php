<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DoctorsRecipient $doctorsRecipient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Doctors Recipient'), ['action' => 'edit', $doctorsRecipient->doctor_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Doctors Recipient'), ['action' => 'delete', $doctorsRecipient->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsRecipient->doctor_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Doctors Recipients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Doctors Recipient'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctorsRecipients view content">
            <h3><?= h($doctorsRecipient->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Doctor') ?></th>
                    <td><?= $doctorsRecipient->hasValue('doctor') ? $this->Html->link($doctorsRecipient->doctor->doctor_id, ['controller' => 'Doctors', 'action' => 'view', $doctorsRecipient->doctor->doctor_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipient') ?></th>
                    <td><?= $doctorsRecipient->hasValue('recipient') ? $this->Html->link($doctorsRecipient->recipient->id, ['controller' => 'Recipients', 'action' => 'view', $doctorsRecipient->recipient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Referral Date') ?></th>
                    <td><?= h($doctorsRecipient->referral_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($doctorsRecipient->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($doctorsRecipient->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
