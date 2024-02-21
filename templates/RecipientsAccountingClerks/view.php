<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientsAccountingClerk $recipientsAccountingClerk
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recipients Accounting Clerk'), ['action' => 'edit', $recipientsAccountingClerk->recipient_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recipients Accounting Clerk'), ['action' => 'delete', $recipientsAccountingClerk->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsAccountingClerk->recipient_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recipients Accounting Clerks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recipients Accounting Clerk'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientsAccountingClerks view content">
            <h3><?= h($recipientsAccountingClerk->recipient_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Accounting Clerk') ?></th>
                    <td><?= $recipientsAccountingClerk->hasValue('accounting_clerk') ? $this->Html->link($recipientsAccountingClerk->accounting_clerk->clerk_id, ['controller' => 'AccountingClerks', 'action' => 'view', $recipientsAccountingClerk->accounting_clerk->clerk_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipient Id') ?></th>
                    <td><?= $this->Number->format($recipientsAccountingClerk->recipient_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($recipientsAccountingClerk->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($recipientsAccountingClerk->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
