<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RehabStaysType> $rehabStaysTypes
 */
?>
<div class="rehabStaysTypes index content">
    <?= $this->Html->link(__('New Rehab Stays Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rehab Stays Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('stay_id') ?></th>
                    <th><?= $this->Paginator->sort('type_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rehabStaysTypes as $rehabStaysType): ?>
                <tr>
                    <td><?= $rehabStaysType->hasValue('rehab_stay') ? $this->Html->link($rehabStaysType->rehab_stay->stay_id, ['controller' => 'RehabStays', 'action' => 'view', $rehabStaysType->rehab_stay->stay_id]) : '' ?></td>
                    <td><?= $rehabStaysType->hasValue('rehab_type') ? $this->Html->link($rehabStaysType->rehab_type->type_id, ['controller' => 'RehabTypes', 'action' => 'view', $rehabStaysType->rehab_type->type_id]) : '' ?></td>
                    <td><?= h($rehabStaysType->created) ?></td>
                    <td><?= h($rehabStaysType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rehabStaysType->stay_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rehabStaysType->stay_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rehabStaysType->stay_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabStaysType->stay_id)]) ?>
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
