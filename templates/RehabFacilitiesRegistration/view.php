<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabFacilitiesRegistration $rehabFacilitiesRegistration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rehab Facilities Registration'), ['action' => 'edit', $rehabFacilitiesRegistration->facility_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rehab Facilities Registration'), ['action' => 'delete', $rehabFacilitiesRegistration->facility_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabFacilitiesRegistration->facility_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rehab Facilities Registration'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rehab Facilities Registration'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabFacilitiesRegistration view content">
            <h3><?= h($rehabFacilitiesRegistration->facility_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Facility Id') ?></th>
                    <td><?= $this->Number->format($rehabFacilitiesRegistration->facility_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Date') ?></th>
                    <td><?= h($rehabFacilitiesRegistration->registration_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rehabFacilitiesRegistration->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($rehabFacilitiesRegistration->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
