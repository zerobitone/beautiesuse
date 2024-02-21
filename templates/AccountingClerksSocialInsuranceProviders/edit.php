<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingClerksSocialInsuranceProvider $accountingClerksSocialInsuranceProvider
 * @var string[]|\Cake\Collection\CollectionInterface $socialInsuranceProviders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accountingClerksSocialInsuranceProvider->clerk_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerksSocialInsuranceProvider->clerk_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Accounting Clerks Social Insurance Providers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="accountingClerksSocialInsuranceProviders form content">
            <?= $this->Form->create($accountingClerksSocialInsuranceProvider) ?>
            <fieldset>
                <legend><?= __('Edit Accounting Clerks Social Insurance Provider') ?></legend>
                <?php
                    echo $this->Form->control('social_insurance_provider_id', ['options' => $socialInsuranceProviders, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
