<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AccountingClerksSocialInsuranceProvider> $accountingClerksSocialInsuranceProviders
 */
?>
<div class="accountingClerksSocialInsuranceProviders index content">
    <?= $this->Html->link(__('New Accounting Clerks Social Insurance Provider'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Accounting Clerks Social Insurance Providers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('clerk_id') ?></th>
                    <th><?= $this->Paginator->sort('social_insurance_provider_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accountingClerksSocialInsuranceProviders as $accountingClerksSocialInsuranceProvider): ?>
                <tr>
                    <td><?= $this->Number->format($accountingClerksSocialInsuranceProvider->clerk_id) ?></td>
                    <td><?= $accountingClerksSocialInsuranceProvider->hasValue('social_insurance_provider') ? $this->Html->link($accountingClerksSocialInsuranceProvider->social_insurance_provider->social_insurance_provider_id, ['controller' => 'SocialInsuranceProviders', 'action' => 'view', $accountingClerksSocialInsuranceProvider->social_insurance_provider->social_insurance_provider_id]) : '' ?></td>
                    <td><?= h($accountingClerksSocialInsuranceProvider->created) ?></td>
                    <td><?= h($accountingClerksSocialInsuranceProvider->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accountingClerksSocialInsuranceProvider->clerk_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountingClerksSocialInsuranceProvider->clerk_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountingClerksSocialInsuranceProvider->clerk_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerksSocialInsuranceProvider->clerk_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
