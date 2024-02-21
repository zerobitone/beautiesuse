<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SocialInsuranceProvidersContactDetail> $socialInsuranceProvidersContactDetails
 */
?>
<div class="socialInsuranceProvidersContactDetails index content">
    <?= $this->Html->link(__('New Social Insurance Providers Contact Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Social Insurance Providers Contact Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('social_insurance_provider_id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socialInsuranceProvidersContactDetails as $socialInsuranceProvidersContactDetail): ?>
                <tr>
                    <td><?= $this->Number->format($socialInsuranceProvidersContactDetail->social_insurance_provider_id) ?></td>
                    <td><?= h($socialInsuranceProvidersContactDetail->email) ?></td>
                    <td><?= h($socialInsuranceProvidersContactDetail->phone) ?></td>
                    <td><?= h($socialInsuranceProvidersContactDetail->created) ?></td>
                    <td><?= h($socialInsuranceProvidersContactDetail->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $socialInsuranceProvidersContactDetail->social_insurance_provider_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialInsuranceProvidersContactDetail->social_insurance_provider_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialInsuranceProvidersContactDetail->social_insurance_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvidersContactDetail->social_insurance_provider_id)]) ?>
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
