<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RehabFacility> $rehabFacilities
 */
?>
<div class="rehabFacilities index content">
    <?= $this->Html->link(__('New Rehab Facility'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rehab Facilities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('facility_id') ?></th>
                    <th><?= $this->Paginator->sort('street_address_line1') ?></th>
                    <th><?= $this->Paginator->sort('street_address_line2') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state_province') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('avatar_path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rehabFacilities as $rehabFacility): ?>
                <tr>
                    <td><?= $this->Number->format($rehabFacility->facility_id) ?></td>
                    <td><?= h($rehabFacility->street_address_line1) ?></td>
                    <td><?= h($rehabFacility->street_address_line2) ?></td>
                    <td><?= h($rehabFacility->city) ?></td>
                    <td><?= h($rehabFacility->state_province) ?></td>
                    <td><?= h($rehabFacility->postal_code) ?></td>
                    <td><?= h($rehabFacility->country) ?></td>
                    <td><?= h($rehabFacility->avatar_path) ?></td>
                    <td><?= h($rehabFacility->created) ?></td>
                    <td><?= h($rehabFacility->modified) ?></td>
                    <td><?= h($rehabFacility->email) ?></td>
                    <td><?= h($rehabFacility->phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rehabFacility->facility_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rehabFacility->facility_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rehabFacility->facility_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabFacility->facility_id)]) ?>
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
