<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientsAccountingClerk $recipientsAccountingClerk
 * @var \Cake\Collection\CollectionInterface|string[] $accountingClerks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Recipients Accounting Clerks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientsAccountingClerks form content">
            <?= $this->Form->create($recipientsAccountingClerk) ?>
            <fieldset>
                <legend><?= __('Add Recipients Accounting Clerk') ?></legend>
                <?php
                    echo $this->Form->control('clerk_id', ['options' => $accountingClerks, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
