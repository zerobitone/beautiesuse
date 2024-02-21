<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingClerksSocialInsuranceProvider $accountingClerksSocialInsuranceProvider
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accounting Clerks Social Insurance Provider'), ['action' => 'edit', $accountingClerksSocialInsuranceProvider->clerk_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accounting Clerks Social Insurance Provider'), ['action' => 'delete', $accountingClerksSocialInsuranceProvider->clerk_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerksSocialInsuranceProvider->clerk_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accounting Clerks Social Insurance Providers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accounting Clerks Social Insurance Provider'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="accountingClerksSocialInsuranceProviders view content">
            <h3><?= h($accountingClerksSocialInsuranceProvider->clerk_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Social Insurance Provider') ?></th>
                    <td><?= $accountingClerksSocialInsuranceProvider->hasValue('social_insurance_provider') ? $this->Html->link($accountingClerksSocialInsuranceProvider->social_insurance_provider->social_insurance_provider_id, ['controller' => 'SocialInsuranceProviders', 'action' => 'view', $accountingClerksSocialInsuranceProvider->social_insurance_provider->social_insurance_provider_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Clerk Id') ?></th>
                    <td><?= $this->Number->format($accountingClerksSocialInsuranceProvider->clerk_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($accountingClerksSocialInsuranceProvider->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($accountingClerksSocialInsuranceProvider->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
