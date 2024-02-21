<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabFacility $rehabFacility
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rehab Facility'), ['action' => 'edit', $rehabFacility->facility_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rehab Facility'), ['action' => 'delete', $rehabFacility->facility_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabFacility->facility_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rehab Facilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rehab Facility'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabFacilities view content">
            <h3><?= h($rehabFacility->facility_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Street Address Line1') ?></th>
                    <td><?= h($rehabFacility->street_address_line1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line2') ?></th>
                    <td><?= h($rehabFacility->street_address_line2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($rehabFacility->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Province') ?></th>
                    <td><?= h($rehabFacility->state_province) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= h($rehabFacility->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($rehabFacility->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar Path') ?></th>
                    <td><?= h($rehabFacility->avatar_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($rehabFacility->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($rehabFacility->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Facility Id') ?></th>
                    <td><?= $this->Number->format($rehabFacility->facility_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rehabFacility->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($rehabFacility->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
