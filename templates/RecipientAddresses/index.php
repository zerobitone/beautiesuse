<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RecipientAddress> $recipientAddresses
 */
?>
<div class="recipientAddresses index content">
    <?= $this->Html->link(__('New Recipient Address'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recipient Addresses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('recipient_id') ?></th>
                    <th><?= $this->Paginator->sort('street_address_line1') ?></th>
                    <th><?= $this->Paginator->sort('street_address_line2') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state_province') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipientAddresses as $recipientAddress): ?>
                <tr>
                    <td><?= $this->Number->format($recipientAddress->recipient_id) ?></td>
                    <td><?= h($recipientAddress->street_address_line1) ?></td>
                    <td><?= h($recipientAddress->street_address_line2) ?></td>
                    <td><?= h($recipientAddress->city) ?></td>
                    <td><?= h($recipientAddress->state_province) ?></td>
                    <td><?= h($recipientAddress->postal_code) ?></td>
                    <td><?= h($recipientAddress->country) ?></td>
                    <td><?= h($recipientAddress->created) ?></td>
                    <td><?= h($recipientAddress->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recipientAddress->recipient_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipientAddress->recipient_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipientAddress->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientAddress->recipient_id)]) ?>
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
