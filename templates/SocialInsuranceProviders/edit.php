<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialInsuranceProvider $socialInsuranceProvider
 * @var string[]|\Cake\Collection\CollectionInterface $accountingClerks
 * @var string[]|\Cake\Collection\CollectionInterface $recipients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $socialInsuranceProvider->social_insurance_provider_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvider->social_insurance_provider_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Social Insurance Providers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="socialInsuranceProviders form content">
            <?= $this->Form->create($socialInsuranceProvider) ?>
            <fieldset>
                <legend><?= __('Edit Social Insurance Provider') ?></legend>
                <?php
                    echo $this->Form->control('social_insurance_provider_name');
                    echo $this->Form->control('avatar_path');
                    echo $this->Form->control('accounting_clerks._ids', ['options' => $accountingClerks]);
                    echo $this->Form->control('recipients._ids', ['options' => $recipients]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
