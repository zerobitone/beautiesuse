<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RehabStay> $rehabStays
 */
?>
<div class="rehabStays index content">
    <?= $this->Html->link(__('New Rehab Stay'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rehab Stays') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('stay_id') ?></th>
                    <th><?= $this->Paginator->sort('recipient_id') ?></th>
                    <th><?= $this->Paginator->sort('social_insurance_provider_id') ?></th>
                    <th><?= $this->Paginator->sort('facility_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('length_of_stay') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rehabStays as $rehabStay): ?>
                <tr>
                    <td><?= $this->Number->format($rehabStay->stay_id) ?></td>
                    <td><?= $rehabStay->hasValue('recipient') ? $this->Html->link($rehabStay->recipient->id, ['controller' => 'Recipients', 'action' => 'view', $rehabStay->recipient->id]) : '' ?></td>
                    <td><?= $rehabStay->hasValue('social_insurance_provider') ? $this->Html->link($rehabStay->social_insurance_provider->social_insurance_provider_id, ['controller' => 'SocialInsuranceProviders', 'action' => 'view', $rehabStay->social_insurance_provider->social_insurance_provider_id]) : '' ?></td>
                    <td><?= $rehabStay->hasValue('rehab_facility') ? $this->Html->link($rehabStay->rehab_facility->facility_id, ['controller' => 'RehabFacilities', 'action' => 'view', $rehabStay->rehab_facility->facility_id]) : '' ?></td>
                    <td><?= h($rehabStay->status) ?></td>
                    <td><?= h($rehabStay->start_date) ?></td>
                    <td><?= h($rehabStay->end_date) ?></td>
                    <td><?= $rehabStay->length_of_stay === null ? '' : $this->Number->format($rehabStay->length_of_stay) ?></td>
                    <td><?= h($rehabStay->created) ?></td>
                    <td><?= h($rehabStay->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rehabStay->stay_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rehabStay->stay_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rehabStay->stay_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabStay->stay_id)]) ?>
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
