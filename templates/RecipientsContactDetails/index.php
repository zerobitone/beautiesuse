<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RecipientsContactDetail> $recipientsContactDetails
 */
?>
<div class="recipientsContactDetails index content">
    <?= $this->Html->link(__('New Recipients Contact Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recipients Contact Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('recipient_id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipientsContactDetails as $recipientsContactDetail): ?>
                <tr>
                    <td><?= $this->Number->format($recipientsContactDetail->recipient_id) ?></td>
                    <td><?= h($recipientsContactDetail->email) ?></td>
                    <td><?= h($recipientsContactDetail->phone) ?></td>
                    <td><?= h($recipientsContactDetail->created) ?></td>
                    <td><?= h($recipientsContactDetail->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recipientsContactDetail->recipient_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipientsContactDetail->recipient_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipientsContactDetail->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsContactDetail->recipient_id)]) ?>
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
