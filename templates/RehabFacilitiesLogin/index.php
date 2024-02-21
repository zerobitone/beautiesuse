<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RehabFacilitiesLogin> $rehabFacilitiesLogin
 */
?>
<div class="rehabFacilitiesLogin index content">
    <?= $this->Html->link(__('New Rehab Facilities Login'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rehab Facilities Login') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('facility_id') ?></th>
                    <th><?= $this->Paginator->sort('last_login') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rehabFacilitiesLogin as $rehabFacilitiesLogin): ?>
                <tr>
                    <td><?= $this->Number->format($rehabFacilitiesLogin->facility_id) ?></td>
                    <td><?= h($rehabFacilitiesLogin->last_login) ?></td>
                    <td><?= h($rehabFacilitiesLogin->created) ?></td>
                    <td><?= h($rehabFacilitiesLogin->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rehabFacilitiesLogin->facility_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rehabFacilitiesLogin->facility_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rehabFacilitiesLogin->facility_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabFacilitiesLogin->facility_id)]) ?>
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
