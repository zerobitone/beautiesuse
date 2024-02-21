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
            <?= $this->Html->link(__('Edit Social Insurance Providers Contact Detail'), ['action' => 'edit', $socialInsuranceProvidersContactDetail->social_insurance_provider_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Social Insurance Providers Contact Detail'), ['action' => 'delete', $socialInsuranceProvidersContactDetail->social_insurance_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvidersContactDetail->social_insurance_provider_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Social Insurance Providers Contact Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Social Insurance Providers Contact Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="socialInsuranceProvidersContactDetails view content">
            <h3><?= h($socialInsuranceProvidersContactDetail->social_insurance_provider_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($socialInsuranceProvidersContactDetail->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($socialInsuranceProvidersContactDetail->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Insurance Provider Id') ?></th>
                    <td><?= $this->Number->format($socialInsuranceProvidersContactDetail->social_insurance_provider_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($socialInsuranceProvidersContactDetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($socialInsuranceProvidersContactDetail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
