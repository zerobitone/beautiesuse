<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RecipientsRehabType> $recipientsRehabTypes
 */
?>
<div class="recipientsRehabTypes index content">
    <?= $this->Html->link(__('New Recipients Rehab Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recipients Rehab Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('recipient_id') ?></th>
                    <th><?= $this->Paginator->sort('type_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipientsRehabTypes as $recipientsRehabType): ?>
                <tr>
                    <td><?= $recipientsRehabType->hasValue('recipient') ? $this->Html->link($recipientsRehabType->recipient->id, ['controller' => 'Recipients', 'action' => 'view', $recipientsRehabType->recipient->id]) : '' ?></td>
                    <td><?= $recipientsRehabType->hasValue('rehab_type') ? $this->Html->link($recipientsRehabType->rehab_type->type_id, ['controller' => 'RehabTypes', 'action' => 'view', $recipientsRehabType->rehab_type->type_id]) : '' ?></td>
                    <td><?= h($recipientsRehabType->created) ?></td>
                    <td><?= h($recipientsRehabType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recipientsRehabType->recipient_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipientsRehabType->recipient_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipientsRehabType->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsRehabType->recipient_id)]) ?>
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
