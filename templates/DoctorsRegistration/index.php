<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DoctorsRegistration> $doctorsRegistration
 */
?>
<div class="doctorsRegistration index content">
    <?= $this->Html->link(__('New Doctors Registration'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Doctors Registration') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('doctor_id') ?></th>
                    <th><?= $this->Paginator->sort('registration_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctorsRegistration as $doctorsRegistration): ?>
                <tr>
                    <td><?= $this->Number->format($doctorsRegistration->doctor_id) ?></td>
                    <td><?= h($doctorsRegistration->registration_date) ?></td>
                    <td><?= h($doctorsRegistration->created) ?></td>
                    <td><?= h($doctorsRegistration->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $doctorsRegistration->doctor_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctorsRegistration->doctor_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctorsRegistration->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsRegistration->doctor_id)]) ?>
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
