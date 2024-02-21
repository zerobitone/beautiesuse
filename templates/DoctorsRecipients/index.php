<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DoctorsRecipient> $doctorsRecipients
 */
?>
<div class="doctorsRecipients index content">
    <?= $this->Html->link(__('New Doctors Recipient'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Doctors Recipients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('doctor_id') ?></th>
                    <th><?= $this->Paginator->sort('recipient_id') ?></th>
                    <th><?= $this->Paginator->sort('referral_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctorsRecipients as $doctorsRecipient): ?>
                <tr>
                    <td><?= $doctorsRecipient->hasValue('doctor') ? $this->Html->link($doctorsRecipient->doctor->doctor_id, ['controller' => 'Doctors', 'action' => 'view', $doctorsRecipient->doctor->doctor_id]) : '' ?></td>
                    <td><?= $doctorsRecipient->hasValue('recipient') ? $this->Html->link($doctorsRecipient->recipient->id, ['controller' => 'Recipients', 'action' => 'view', $doctorsRecipient->recipient->id]) : '' ?></td>
                    <td><?= h($doctorsRecipient->referral_date) ?></td>
                    <td><?= h($doctorsRecipient->created) ?></td>
                    <td><?= h($doctorsRecipient->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $doctorsRecipient->doctor_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctorsRecipient->doctor_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctorsRecipient->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsRecipient->doctor_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
