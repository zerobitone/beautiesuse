<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingClerk $accountingClerk
 * @var string[]|\Cake\Collection\CollectionInterface $recipients
 * @var string[]|\Cake\Collection\CollectionInterface $socialInsuranceProviders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accountingClerk->clerk_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerk->clerk_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Accounting Clerks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="accountingClerks form content">
            <?= $this->Form->create($accountingClerk) ?>
            <fieldset>
                <legend><?= __('Edit Accounting Clerk') ?></legend>
                <?php
                    echo $this->Form->control('clerk_lastname');
                    echo $this->Form->control('clerk_firstname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('avatar_path');
                    echo $this->Form->control('recipients._ids', ['options' => $recipients]);
                    echo $this->Form->control('social_insurance_providers._ids', ['options' => $socialInsuranceProviders]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
