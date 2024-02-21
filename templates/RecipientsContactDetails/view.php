<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientsContactDetail $recipientsContactDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recipients Contact Detail'), ['action' => 'edit', $recipientsContactDetail->recipient_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recipients Contact Detail'), ['action' => 'delete', $recipientsContactDetail->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsContactDetail->recipient_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recipients Contact Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recipients Contact Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientsContactDetails view content">
            <h3><?= h($recipientsContactDetail->recipient_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($recipientsContactDetail->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($recipientsContactDetail->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipient Id') ?></th>
                    <td><?= $this->Number->format($recipientsContactDetail->recipient_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($recipientsContactDetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($recipientsContactDetail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
