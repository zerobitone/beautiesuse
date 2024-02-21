<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Recipient> $recipients
 */
?>
<div class="recipients index content">
    <?= $this->Html->link(__('New Recipient'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recipients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('recipient_title') ?></th>
                    <th><?= $this->Paginator->sort('recipient_first_name') ?></th>
                    <th><?= $this->Paginator->sort('recipient_last_name') ?></th>
                    <th><?= $this->Paginator->sort('company_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('avatar_path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('accounting_clerk_id') ?></th>
                    <th><?= $this->Paginator->sort('social_insurance_provider_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipients as $recipient): ?>
                <tr>
                    <td><?= $this->Number->format($recipient->id) ?></td>
                    <td><?= h($recipient->recipient_title) ?></td>
                    <td><?= h($recipient->recipient_first_name) ?></td>
                    <td><?= h($recipient->recipient_last_name) ?></td>
                    <td><?= h($recipient->company_name) ?></td>
                    <td><?= h($recipient->email) ?></td>
                    <td><?= h($recipient->phone) ?></td>
                    <td><?= h($recipient->avatar_path) ?></td>
                    <td><?= h($recipient->created) ?></td>
                    <td><?= h($recipient->modified) ?></td>
                    <td><?= $recipient->accounting_clerk_id === null ? '' : $this->Number->format($recipient->accounting_clerk_id) ?></td>
                    <td><?= $recipient->social_insurance_provider_id === null ? '' : $this->Number->format($recipient->social_insurance_provider_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recipient->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipient->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipient->id)]) ?>
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
