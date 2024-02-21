<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabStaysType $rehabStaysType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rehab Stays Type'), ['action' => 'edit', $rehabStaysType->stay_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rehab Stays Type'), ['action' => 'delete', $rehabStaysType->stay_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabStaysType->stay_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rehab Stays Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rehab Stays Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabStaysTypes view content">
            <h3><?= h($rehabStaysType->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rehab Stay') ?></th>
                    <td><?= $rehabStaysType->hasValue('rehab_stay') ? $this->Html->link($rehabStaysType->rehab_stay->stay_id, ['controller' => 'RehabStays', 'action' => 'view', $rehabStaysType->rehab_stay->stay_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rehab Type') ?></th>
                    <td><?= $rehabStaysType->hasValue('rehab_type') ? $this->Html->link($rehabStaysType->rehab_type->type_id, ['controller' => 'RehabTypes', 'action' => 'view', $rehabStaysType->rehab_type->type_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rehabStaysType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($rehabStaysType->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
