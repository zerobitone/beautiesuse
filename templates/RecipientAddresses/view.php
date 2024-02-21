<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientAddress $recipientAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recipient Address'), ['action' => 'edit', $recipientAddress->recipient_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recipient Address'), ['action' => 'delete', $recipientAddress->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientAddress->recipient_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recipient Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recipient Address'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientAddresses view content">
            <h3><?= h($recipientAddress->recipient_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Street Address Line1') ?></th>
                    <td><?= h($recipientAddress->street_address_line1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line2') ?></th>
                    <td><?= h($recipientAddress->street_address_line2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($recipientAddress->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Province') ?></th>
                    <td><?= h($recipientAddress->state_province) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= h($recipientAddress->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($recipientAddress->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipient Id') ?></th>
                    <td><?= $this->Number->format($recipientAddress->recipient_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($recipientAddress->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($recipientAddress->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
