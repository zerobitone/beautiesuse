<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingClerk $accountingClerk
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accounting Clerk'), ['action' => 'edit', $accountingClerk->clerk_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accounting Clerk'), ['action' => 'delete', $accountingClerk->clerk_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerk->clerk_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accounting Clerks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accounting Clerk'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="accountingClerks view content">
            <h3><?= h($accountingClerk->clerk_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Clerk Lastname') ?></th>
                    <td><?= h($accountingClerk->clerk_lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clerk Firstname') ?></th>
                    <td><?= h($accountingClerk->clerk_firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($accountingClerk->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($accountingClerk->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar Path') ?></th>
                    <td><?= h($accountingClerk->avatar_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clerk Id') ?></th>
                    <td><?= $this->Number->format($accountingClerk->clerk_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($accountingClerk->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($accountingClerk->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Recipients') ?></h4>
                <?php if (!empty($accountingClerk->recipients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Recipient Title') ?></th>
                            <th><?= __('Recipient First Name') ?></th>
                            <th><?= __('Recipient Last Name') ?></th>
                            <th><?= __('Company Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Avatar Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Accounting Clerk Id') ?></th>
                            <th><?= __('Social Insurance Provider Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($accountingClerk->recipients as $recipients) : ?>
                        <tr>
                            <td><?= h($recipients->id) ?></td>
                            <td><?= h($recipients->recipient_title) ?></td>
                            <td><?= h($recipients->recipient_first_name) ?></td>
                            <td><?= h($recipients->recipient_last_name) ?></td>
                            <td><?= h($recipients->company_name) ?></td>
                            <td><?= h($recipients->email) ?></td>
                            <td><?= h($recipients->password) ?></td>
                            <td><?= h($recipients->phone) ?></td>
                            <td><?= h($recipients->avatar_path) ?></td>
                            <td><?= h($recipients->created) ?></td>
                            <td><?= h($recipients->modified) ?></td>
                            <td><?= h($recipients->accounting_clerk_id) ?></td>
                            <td><?= h($recipients->social_insurance_provider_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Recipients', 'action' => 'view', $recipients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Recipients', 'action' => 'edit', $recipients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recipients', 'action' => 'delete', $recipients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipients->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Social Insurance Providers') ?></h4>
                <?php if (!empty($accountingClerk->social_insurance_providers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Social Insurance Provider Id') ?></th>
                            <th><?= __('Social Insurance Provider Name') ?></th>
                            <th><?= __('Avatar Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($accountingClerk->social_insurance_providers as $socialInsuranceProviders) : ?>
                        <tr>
                            <td><?= h($socialInsuranceProviders->social_insurance_provider_id) ?></td>
                            <td><?= h($socialInsuranceProviders->social_insurance_provider_name) ?></td>
                            <td><?= h($socialInsuranceProviders->avatar_path) ?></td>
                            <td><?= h($socialInsuranceProviders->created) ?></td>
                            <td><?= h($socialInsuranceProviders->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SocialInsuranceProviders', 'action' => 'view', $socialInsuranceProviders->social_insurance_provider_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SocialInsuranceProviders', 'action' => 'edit', $socialInsuranceProviders->social_insurance_provider_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SocialInsuranceProviders', 'action' => 'delete', $socialInsuranceProviders->social_insurance_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProviders->social_insurance_provider_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
