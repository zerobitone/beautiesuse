<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialInsuranceProvidersRecipient $socialInsuranceProvidersRecipient
 * @var string[]|\Cake\Collection\CollectionInterface $socialInsuranceProviders
 * @var string[]|\Cake\Collection\CollectionInterface $recipients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $socialInsuranceProvidersRecipient->social_insurance_provider_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvidersRecipient->social_insurance_provider_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Social Insurance Providers Recipients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="socialInsuranceProvidersRecipients form content">
            <?= $this->Form->create($socialInsuranceProvidersRecipient) ?>
            <fieldset>
                <legend><?= __('Edit Social Insurance Providers Recipient') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
