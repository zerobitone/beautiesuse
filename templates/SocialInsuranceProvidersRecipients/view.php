<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialInsuranceProvidersRecipient $socialInsuranceProvidersRecipient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Social Insurance Providers Recipient'), ['action' => 'edit', $socialInsuranceProvidersRecipient->social_insurance_provider_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Social Insurance Providers Recipient'), ['action' => 'delete', $socialInsuranceProvidersRecipient->social_insurance_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvidersRecipient->social_insurance_provider_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Social Insurance Providers Recipients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Social Insurance Providers Recipient'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="socialInsuranceProvidersRecipients view content">
            <h3><?= h($socialInsuranceProvidersRecipient->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Social Insurance Provider') ?></th>
                    <td><?= $socialInsuranceProvidersRecipient->hasValue('social_insurance_provider') ? $this->Html->link($socialInsuranceProvidersRecipient->social_insurance_provider->social_insurance_provider_id, ['controller' => 'SocialInsuranceProviders', 'action' => 'view', $socialInsuranceProvidersRecipient->social_insurance_provider->social_insurance_provider_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipient') ?></th>
                    <td><?= $socialInsuranceProvidersRecipient->hasValue('recipient') ? $this->Html->link($socialInsuranceProvidersRecipient->recipient->id, ['controller' => 'Recipients', 'action' => 'view', $socialInsuranceProvidersRecipient->recipient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($socialInsuranceProvidersRecipient->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($socialInsuranceProvidersRecipient->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
