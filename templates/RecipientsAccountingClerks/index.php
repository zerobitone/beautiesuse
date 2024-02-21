<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RecipientsAccountingClerk> $recipientsAccountingClerks
 */
?>
<div class="recipientsAccountingClerks index content">
    <?= $this->Html->link(__('New Recipients Accounting Clerk'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recipients Accounting Clerks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('recipient_id') ?></th>
                    <th><?= $this->Paginator->sort('clerk_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipientsAccountingClerks as $recipientsAccountingClerk): ?>
                <tr>
                    <td><?= $this->Number->format($recipientsAccountingClerk->recipient_id) ?></td>
                    <td><?= $recipientsAccountingClerk->hasValue('accounting_clerk') ? $this->Html->link($recipientsAccountingClerk->accounting_clerk->clerk_id, ['controller' => 'AccountingClerks', 'action' => 'view', $recipientsAccountingClerk->accounting_clerk->clerk_id]) : '' ?></td>
                    <td><?= h($recipientsAccountingClerk->created) ?></td>
                    <td><?= h($recipientsAccountingClerk->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recipientsAccountingClerk->recipient_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipientsAccountingClerk->recipient_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipientsAccountingClerk->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsAccountingClerk->recipient_id)]) ?>
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
