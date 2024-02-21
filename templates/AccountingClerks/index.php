<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AccountingClerk> $accountingClerks
 */
?>
<div class="accountingClerks index content">
    <?= $this->Html->link(__('New Accounting Clerk'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Accounting Clerks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('clerk_id') ?></th>
                    <th><?= $this->Paginator->sort('clerk_lastname') ?></th>
                    <th><?= $this->Paginator->sort('clerk_firstname') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('avatar_path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accountingClerks as $accountingClerk): ?>
                <tr>
                    <td><?= $this->Number->format($accountingClerk->clerk_id) ?></td>
                    <td><?= h($accountingClerk->clerk_lastname) ?></td>
                    <td><?= h($accountingClerk->clerk_firstname) ?></td>
                    <td><?= h($accountingClerk->email) ?></td>
                    <td><?= h($accountingClerk->phone) ?></td>
                    <td><?= h($accountingClerk->avatar_path) ?></td>
                    <td><?= h($accountingClerk->created) ?></td>
                    <td><?= h($accountingClerk->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accountingClerk->clerk_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountingClerk->clerk_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountingClerk->clerk_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerk->clerk_id)]) ?>
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
