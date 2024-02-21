<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientsAccountingClerk $recipientsAccountingClerk
 * @var string[]|\Cake\Collection\CollectionInterface $accountingClerks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recipientsAccountingClerk->recipient_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsAccountingClerk->recipient_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Recipients Accounting Clerks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientsAccountingClerks form content">
            <?= $this->Form->create($recipientsAccountingClerk) ?>
            <fieldset>
                <legend><?= __('Edit Recipients Accounting Clerk') ?></legend>
                <?php
                    echo $this->Form->control('clerk_id', ['options' => $accountingClerks, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
