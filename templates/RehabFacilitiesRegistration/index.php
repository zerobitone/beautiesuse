<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RehabFacilitiesRegistration> $rehabFacilitiesRegistration
 */
?>
<div class="rehabFacilitiesRegistration index content">
    <?= $this->Html->link(__('New Rehab Facilities Registration'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rehab Facilities Registration') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('facility_id') ?></th>
                    <th><?= $this->Paginator->sort('registration_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rehabFacilitiesRegistration as $rehabFacilitiesRegistration): ?>
                <tr>
                    <td><?= $this->Number->format($rehabFacilitiesRegistration->facility_id) ?></td>
                    <td><?= h($rehabFacilitiesRegistration->registration_date) ?></td>
                    <td><?= h($rehabFacilitiesRegistration->created) ?></td>
                    <td><?= h($rehabFacilitiesRegistration->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rehabFacilitiesRegistration->facility_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rehabFacilitiesRegistration->facility_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rehabFacilitiesRegistration->facility_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabFacilitiesRegistration->facility_id)]) ?>
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
