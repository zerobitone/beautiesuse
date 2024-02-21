<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialInsuranceProvidersContactDetail $socialInsuranceProvidersContactDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $socialInsuranceProvidersContactDetail->social_insurance_provider_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvidersContactDetail->social_insurance_provider_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Social Insurance Providers Contact Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="socialInsuranceProvidersContactDetails form content">
            <?= $this->Form->create($socialInsuranceProvidersContactDetail) ?>
            <fieldset>
                <legend><?= __('Edit Social Insurance Providers Contact Detail') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
