<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialInsuranceProvider $socialInsuranceProvider
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Social Insurance Provider'), ['action' => 'edit', $socialInsuranceProvider->social_insurance_provider_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Social Insurance Provider'), ['action' => 'delete', $socialInsuranceProvider->social_insurance_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialInsuranceProvider->social_insurance_provider_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Social Insurance Providers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Social Insurance Provider'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="socialInsuranceProviders view content">
            <h3><?= h($socialInsuranceProvider->social_insurance_provider_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Social Insurance Provider Name') ?></th>
                    <td><?= h($socialInsuranceProvider->social_insurance_provider_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar Path') ?></th>
                    <td><?= h($socialInsuranceProvider->avatar_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Insurance Provider Id') ?></th>
                    <td><?= $this->Number->format($socialInsuranceProvider->social_insurance_provider_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($socialInsuranceProvider->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($socialInsuranceProvider->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Accounting Clerks') ?></h4>
                <?php if (!empty($socialInsuranceProvider->accounting_clerks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Clerk Id') ?></th>
                            <th><?= __('Clerk Lastname') ?></th>
                            <th><?= __('Clerk Firstname') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Avatar Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($socialInsuranceProvider->accounting_clerks as $accountingClerks) : ?>
                        <tr>
                            <td><?= h($accountingClerks->clerk_id) ?></td>
                            <td><?= h($accountingClerks->clerk_lastname) ?></td>
                            <td><?= h($accountingClerks->clerk_firstname) ?></td>
                            <td><?= h($accountingClerks->email) ?></td>
                            <td><?= h($accountingClerks->password) ?></td>
                            <td><?= h($accountingClerks->phone) ?></td>
                            <td><?= h($accountingClerks->avatar_path) ?></td>
                            <td><?= h($accountingClerks->created) ?></td>
                            <td><?= h($accountingClerks->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AccountingClerks', 'action' => 'view', $accountingClerks->clerk_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AccountingClerks', 'action' => 'edit', $accountingClerks->clerk_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AccountingClerks', 'action' => 'delete', $accountingClerks->clerk_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingClerks->clerk_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Recipients') ?></h4>
                <?php if (!empty($socialInsuranceProvider->recipients)) : ?>
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
                        <?php foreach ($socialInsuranceProvider->recipients as $recipients) : ?>
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
        </div>
    </div>
</div>
