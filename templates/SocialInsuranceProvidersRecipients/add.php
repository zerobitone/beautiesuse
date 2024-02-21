<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialInsuranceProvidersRecipient $socialInsuranceProvidersRecipient
 * @var \Cake\Collection\CollectionInterface|string[] $socialInsuranceProviders
 * @var \Cake\Collection\CollectionInterface|string[] $recipients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Social Insurance Providers Recipients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="socialInsuranceProvidersRecipients form content">
            <?= $this->Form->create($socialInsuranceProvidersRecipient) ?>
            <fieldset>
                <legend><?= __('Add Social Insurance Providers Recipient') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
