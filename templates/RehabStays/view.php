<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabStay $rehabStay
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rehab Stay'), ['action' => 'edit', $rehabStay->stay_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rehab Stay'), ['action' => 'delete', $rehabStay->stay_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabStay->stay_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rehab Stays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rehab Stay'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabStays view content">
            <h3><?= h($rehabStay->stay_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Recipient') ?></th>
                    <td><?= $rehabStay->hasValue('recipient') ? $this->Html->link($rehabStay->recipient->id, ['controller' => 'Recipients', 'action' => 'view', $rehabStay->recipient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Insurance Provider') ?></th>
                    <td><?= $rehabStay->hasValue('social_insurance_provider') ? $this->Html->link($rehabStay->social_insurance_provider->social_insurance_provider_id, ['controller' => 'SocialInsuranceProviders', 'action' => 'view', $rehabStay->social_insurance_provider->social_insurance_provider_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rehab Facility') ?></th>
                    <td><?= $rehabStay->hasValue('rehab_facility') ? $this->Html->link($rehabStay->rehab_facility->facility_id, ['controller' => 'RehabFacilities', 'action' => 'view', $rehabStay->rehab_facility->facility_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($rehabStay->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stay Id') ?></th>
                    <td><?= $this->Number->format($rehabStay->stay_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Length Of Stay') ?></th>
                    <td><?= $rehabStay->length_of_stay === null ? '' : $this->Number->format($rehabStay->length_of_stay) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($rehabStay->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($rehabStay->end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rehabStay->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($rehabStay->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
