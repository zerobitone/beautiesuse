<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingClerksContactDetail $accountingClerksContactDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accounting Clerks Contact Detail'), ['action' => 'edit', $accountingClerksContactDetail->clerk_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accounting Clerks Contact Detail'), ['action' => 'delete', $accountingClerksContactDetail->clerk_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerksContactDetail->clerk_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accounting Clerks Contact Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accounting Clerks Contact Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="accountingClerksContactDetails view content">
            <h3><?= h($accountingClerksContactDetail->clerk_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($accountingClerksContactDetail->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($accountingClerksContactDetail->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clerk Id') ?></th>
                    <td><?= $this->Number->format($accountingClerksContactDetail->clerk_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($accountingClerksContactDetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($accountingClerksContactDetail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
