<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AccountingClerksContactDetail> $accountingClerksContactDetails
 */
?>
<div class="accountingClerksContactDetails index content">
    <?= $this->Html->link(__('New Accounting Clerks Contact Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Accounting Clerks Contact Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('clerk_id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accountingClerksContactDetails as $accountingClerksContactDetail): ?>
                <tr>
                    <td><?= $this->Number->format($accountingClerksContactDetail->clerk_id) ?></td>
                    <td><?= h($accountingClerksContactDetail->email) ?></td>
                    <td><?= h($accountingClerksContactDetail->phone) ?></td>
                    <td><?= h($accountingClerksContactDetail->created) ?></td>
                    <td><?= h($accountingClerksContactDetail->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accountingClerksContactDetail->clerk_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountingClerksContactDetail->clerk_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountingClerksContactDetail->clerk_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerksContactDetail->clerk_id)]) ?>
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
