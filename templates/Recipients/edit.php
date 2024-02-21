<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipient $recipient
 * @var string[]|\Cake\Collection\CollectionInterface $accountingClerks
 * @var string[]|\Cake\Collection\CollectionInterface $socialInsuranceProviders
 * @var string[]|\Cake\Collection\CollectionInterface $doctors
 * @var string[]|\Cake\Collection\CollectionInterface $rehabTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recipient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recipient->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Recipients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipients form content">
            <?= $this->Form->create($recipient) ?>
            <fieldset>
                <legend><?= __('Edit Recipient') ?></legend>
                <?php
                    echo $this->Form->control('recipient_title');
                    echo $this->Form->control('recipient_first_name');
                    echo $this->Form->control('recipient_last_name');
                    echo $this->Form->control('company_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('avatar_path');
                    echo $this->Form->control('accounting_clerk_id');
                    echo $this->Form->control('social_insurance_provider_id');
                    echo $this->Form->control('accounting_clerks._ids', ['options' => $accountingClerks]);
                    echo $this->Form->control('social_insurance_providers._ids', ['options' => $socialInsuranceProviders]);
                    echo $this->Form->control('doctors._ids', ['options' => $doctors]);
                    echo $this->Form->control('rehab_types._ids', ['options' => $rehabTypes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
