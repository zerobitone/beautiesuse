<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientsRehabType $recipientsRehabType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recipients Rehab Type'), ['action' => 'edit', $recipientsRehabType->recipient_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recipients Rehab Type'), ['action' => 'delete', $recipientsRehabType->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsRehabType->recipient_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recipients Rehab Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recipients Rehab Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientsRehabTypes view content">
            <h3><?= h($recipientsRehabType->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Recipient') ?></th>
                    <td><?= $recipientsRehabType->hasValue('recipient') ? $this->Html->link($recipientsRehabType->recipient->id, ['controller' => 'Recipients', 'action' => 'view', $recipientsRehabType->recipient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rehab Type') ?></th>
                    <td><?= $recipientsRehabType->hasValue('rehab_type') ? $this->Html->link($recipientsRehabType->rehab_type->type_id, ['controller' => 'RehabTypes', 'action' => 'view', $recipientsRehabType->rehab_type->type_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($recipientsRehabType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($recipientsRehabType->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
