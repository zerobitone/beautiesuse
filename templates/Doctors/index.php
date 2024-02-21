<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Doctor> $doctors
 */
?>
<div class="doctors index content">
    <?= $this->Html->link(__('New Doctor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Doctors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('doctor_id') ?></th>
                    <th><?= $this->Paginator->sort('doctor_lastname') ?></th>
                    <th><?= $this->Paginator->sort('doctor_firstname') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('avatar_path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctors as $doctor): ?>
                <tr>
                    <td><?= $this->Number->format($doctor->doctor_id) ?></td>
                    <td><?= h($doctor->doctor_lastname) ?></td>
                    <td><?= h($doctor->doctor_firstname) ?></td>
                    <td><?= h($doctor->email) ?></td>
                    <td><?= h($doctor->phone) ?></td>
                    <td><?= h($doctor->avatar_path) ?></td>
                    <td><?= h($doctor->created) ?></td>
                    <td><?= h($doctor->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $doctor->doctor_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctor->doctor_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctor->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->doctor_id)]) ?>
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
