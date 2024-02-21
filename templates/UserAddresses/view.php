<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Address'), ['action' => 'edit', $userAddress->user_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Address'), ['action' => 'delete', $userAddress->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->user_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Address'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="userAddresses view content">
            <h3><?= h($userAddress->user_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Street Address Line1') ?></th>
                    <td><?= h($userAddress->street_address_line1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line2') ?></th>
                    <td><?= h($userAddress->street_address_line2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($userAddress->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Province') ?></th>
                    <td><?= h($userAddress->state_province) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= h($userAddress->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($userAddress->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($userAddress->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userAddress->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($userAddress->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
