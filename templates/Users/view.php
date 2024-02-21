<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User Lastname') ?></th>
                    <td><?= h($user->user_lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Firstname') ?></th>
                    <td><?= h($user->user_firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($user->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar Path') ?></th>
                    <td><?= h($user->avatar_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related User Addresses') ?></h4>
                <?php if (!empty($user->user_addresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Street Address Line1') ?></th>
                            <th><?= __('Street Address Line2') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('State Province') ?></th>
                            <th><?= __('Postal Code') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_addresses as $userAddresses) : ?>
                        <tr>
                            <td><?= h($userAddresses->user_id) ?></td>
                            <td><?= h($userAddresses->street_address_line1) ?></td>
                            <td><?= h($userAddresses->street_address_line2) ?></td>
                            <td><?= h($userAddresses->city) ?></td>
                            <td><?= h($userAddresses->state_province) ?></td>
                            <td><?= h($userAddresses->postal_code) ?></td>
                            <td><?= h($userAddresses->country) ?></td>
                            <td><?= h($userAddresses->created) ?></td>
                            <td><?= h($userAddresses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserAddresses', 'action' => 'view', $userAddresses->user_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserAddresses', 'action' => 'edit', $userAddresses->user_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAddresses', 'action' => 'delete', $userAddresses->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddresses->user_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
