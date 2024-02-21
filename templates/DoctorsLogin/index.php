<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DoctorsLogin> $doctorsLogin
 */
?>
<div class="doctorsLogin index content">
    <?= $this->Html->link(__('New Doctors Login'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Doctors Login') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('doctor_id') ?></th>
                    <th><?= $this->Paginator->sort('last_login') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctorsLogin as $doctorsLogin): ?>
                <tr>
                    <td><?= $this->Number->format($doctorsLogin->doctor_id) ?></td>
                    <td><?= h($doctorsLogin->last_login) ?></td>
                    <td><?= h($doctorsLogin->created) ?></td>
                    <td><?= h($doctorsLogin->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $doctorsLogin->doctor_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctorsLogin->doctor_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctorsLogin->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsLogin->doctor_id)]) ?>
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
