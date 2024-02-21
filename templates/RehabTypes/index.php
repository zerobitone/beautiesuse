<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RehabType> $rehabTypes
 */
?>
<div class="rehabTypes index content">
    <?= $this->Html->link(__('New Rehab Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rehab Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('type_id') ?></th>
                    <th><?= $this->Paginator->sort('type_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rehabTypes as $rehabType): ?>
                <tr>
                    <td><?= $this->Number->format($rehabType->type_id) ?></td>
                    <td><?= h($rehabType->type_name) ?></td>
                    <td><?= h($rehabType->created) ?></td>
                    <td><?= h($rehabType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rehabType->type_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rehabType->type_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rehabType->type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabType->type_id)]) ?>
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
