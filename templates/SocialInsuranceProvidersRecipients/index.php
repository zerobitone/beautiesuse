<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SocialInsuranceProvidersRecipient> $socialInsuranceProvidersRecipients
 */
?>
<div class="socialInsuranceProvidersRecipients index content">
    <?= $this->Html->link(__('New Social Insurance Providers Recipient'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Social Insurance Providers Recipients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('social_insurance_provider_id') ?></th>
                    <th><?= $this->Paginator->sort('recipient_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socialInsuranceProvidersRecipients as $socialInsuranceProvidersRecipient): ?>
                <tr>
                    <td><?= $socialInsuranceProvidersRecipient->hasValue('social_insurance_provider') ? $this->Html->link($socialInsuranceProvidersRecipient->social_insurance_provider->social_insurance_provider_id, ['controller' => 'SocialInsuranceProviders', 'action' => 'view', $socialInsuranceProvidersRecipient->social_insurance_provider->social_insurance_provider_id]) : '' ?></td>
                    <td><?= $socialInsuranceProvidersRecipient->hasValue('recipient') ? $this->Html->link($socialInsuranceProvidersRecipient->recipient->id, ['controller' => 'Recipients', 'action' => 'view', $socialInsuranceProvidersRecipient->recipient->id]) : '' ?></td>
                    <td><?= h($socialInsuranceProvidersRecipient->created) ?></td>
                    <td><?= h($socialInsuranceProvidersRecipient->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $socialInsuranceProvidersRecipient->social_insurance_provider_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialInsuranceProvidersRecipient->social_insurance_provider_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialInsuranceProvidersRecipient->social_insurance_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvidersRecipient->social_insurance_provider_id)]) ?>
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
