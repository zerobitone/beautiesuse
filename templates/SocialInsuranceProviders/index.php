<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SocialInsuranceProvider> $socialInsuranceProviders
 */
?>
<div class="socialInsuranceProviders index content">
    <?= $this->Html->link(__('New Social Insurance Provider'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Social Insurance Providers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('social_insurance_provider_id') ?></th>
                    <th><?= $this->Paginator->sort('social_insurance_provider_name') ?></th>
                    <th><?= $this->Paginator->sort('avatar_path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socialInsuranceProviders as $socialInsuranceProvider): ?>
                <tr>
                    <td><?= $this->Number->format($socialInsuranceProvider->social_insurance_provider_id) ?></td>
                    <td><?= h($socialInsuranceProvider->social_insurance_provider_name) ?></td>
                    <td><?= h($socialInsuranceProvider->avatar_path) ?></td>
                    <td><?= h($socialInsuranceProvider->created) ?></td>
                    <td><?= h($socialInsuranceProvider->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $socialInsuranceProvider->social_insurance_provider_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialInsuranceProvider->social_insurance_provider_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialInsuranceProvider->social_insurance_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvider->social_insurance_provider_id)]) ?>
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
