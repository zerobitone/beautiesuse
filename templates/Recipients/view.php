<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipient $recipient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recipient'), ['action' => 'edit', $recipient->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recipient'), ['action' => 'delete', $recipient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipient->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recipients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recipient'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipients view content">
            <h3><?= h($recipient->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Recipient Title') ?></th>
                    <td><?= h($recipient->recipient_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipient First Name') ?></th>
                    <td><?= h($recipient->recipient_first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipient Last Name') ?></th>
                    <td><?= h($recipient->recipient_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($recipient->company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($recipient->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($recipient->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar Path') ?></th>
                    <td><?= h($recipient->avatar_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($recipient->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accounting Clerk Id') ?></th>
                    <td><?= $recipient->accounting_clerk_id === null ? '' : $this->Number->format($recipient->accounting_clerk_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Insurance Provider Id') ?></th>
                    <td><?= $recipient->social_insurance_provider_id === null ? '' : $this->Number->format($recipient->social_insurance_provider_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($recipient->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($recipient->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Accounting Clerks') ?></h4>
                <?php if (!empty($recipient->accounting_clerks)) : ?>
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
                        <?php foreach ($recipient->accounting_clerks as $accountingClerks) : ?>
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
                <h4><?= __('Related Social Insurance Providers') ?></h4>
                <?php if (!empty($recipient->social_insurance_providers)) : ?>
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
                        <?php foreach ($recipient->social_insurance_providers as $socialInsuranceProviders) : ?>
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
            <div class="related">
                <h4><?= __('Related Doctors') ?></h4>
                <?php if (!empty($recipient->doctors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Doctor Id') ?></th>
                            <th><?= __('Doctor Lastname') ?></th>
                            <th><?= __('Doctor Firstname') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Avatar Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($recipient->doctors as $doctors) : ?>
                        <tr>
                            <td><?= h($doctors->doctor_id) ?></td>
                            <td><?= h($doctors->doctor_lastname) ?></td>
                            <td><?= h($doctors->doctor_firstname) ?></td>
                            <td><?= h($doctors->email) ?></td>
                            <td><?= h($doctors->password) ?></td>
                            <td><?= h($doctors->phone) ?></td>
                            <td><?= h($doctors->avatar_path) ?></td>
                            <td><?= h($doctors->created) ?></td>
                            <td><?= h($doctors->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Doctors', 'action' => 'view', $doctors->doctor_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Doctors', 'action' => 'edit', $doctors->doctor_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Doctors', 'action' => 'delete', $doctors->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctors->doctor_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Rehab Types') ?></h4>
                <?php if (!empty($recipient->rehab_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Type Id') ?></th>
                            <th><?= __('Type Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($recipient->rehab_types as $rehabTypes) : ?>
                        <tr>
                            <td><?= h($rehabTypes->type_id) ?></td>
                            <td><?= h($rehabTypes->type_name) ?></td>
                            <td><?= h($rehabTypes->description) ?></td>
                            <td><?= h($rehabTypes->created) ?></td>
                            <td><?= h($rehabTypes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RehabTypes', 'action' => 'view', $rehabTypes->type_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RehabTypes', 'action' => 'edit', $rehabTypes->type_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RehabTypes', 'action' => 'delete', $rehabTypes->type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabTypes->type_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Recipient Addresses') ?></h4>
                <?php if (!empty($recipient->recipient_addresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Recipient Id') ?></th>
                            <th><?= __('Street Address Line1') ?></th>
                            <th><?= __('Street Address Line2') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('State Province') ?></th>
                            <th><?= __('Postal Code') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($recipient->recipient_addresses as $recipientAddresses) : ?>
                        <tr>
                            <td><?= h($recipientAddresses->recipient_id) ?></td>
                            <td><?= h($recipientAddresses->street_address_line1) ?></td>
                            <td><?= h($recipientAddresses->street_address_line2) ?></td>
                            <td><?= h($recipientAddresses->city) ?></td>
                            <td><?= h($recipientAddresses->state_province) ?></td>
                            <td><?= h($recipientAddresses->postal_code) ?></td>
                            <td><?= h($recipientAddresses->country) ?></td>
                            <td><?= h($recipientAddresses->created) ?></td>
                            <td><?= h($recipientAddresses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RecipientAddresses', 'action' => 'view', $recipientAddresses->recipient_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RecipientAddresses', 'action' => 'edit', $recipientAddresses->recipient_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RecipientAddresses', 'action' => 'delete', $recipientAddresses->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientAddresses->recipient_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Recipients Contact Details') ?></h4>
                <?php if (!empty($recipient->recipients_contact_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Recipient Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($recipient->recipients_contact_details as $recipientsContactDetails) : ?>
                        <tr>
                            <td><?= h($recipientsContactDetails->recipient_id) ?></td>
                            <td><?= h($recipientsContactDetails->email) ?></td>
                            <td><?= h($recipientsContactDetails->phone) ?></td>
                            <td><?= h($recipientsContactDetails->created) ?></td>
                            <td><?= h($recipientsContactDetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RecipientsContactDetails', 'action' => 'view', $recipientsContactDetails->recipient_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RecipientsContactDetails', 'action' => 'edit', $recipientsContactDetails->recipient_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RecipientsContactDetails', 'action' => 'delete', $recipientsContactDetails->recipient_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsContactDetails->recipient_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Rehab Stays') ?></h4>
                <?php if (!empty($recipient->rehab_stays)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Stay Id') ?></th>
                            <th><?= __('Recipient Id') ?></th>
                            <th><?= __('Social Insurance Provider Id') ?></th>
                            <th><?= __('Facility Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('End Date') ?></th>
                            <th><?= __('Length Of Stay') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($recipient->rehab_stays as $rehabStays) : ?>
                        <tr>
                            <td><?= h($rehabStays->stay_id) ?></td>
                            <td><?= h($rehabStays->recipient_id) ?></td>
                            <td><?= h($rehabStays->social_insurance_provider_id) ?></td>
                            <td><?= h($rehabStays->facility_id) ?></td>
                            <td><?= h($rehabStays->status) ?></td>
                            <td><?= h($rehabStays->start_date) ?></td>
                            <td><?= h($rehabStays->end_date) ?></td>
                            <td><?= h($rehabStays->length_of_stay) ?></td>
                            <td><?= h($rehabStays->created) ?></td>
                            <td><?= h($rehabStays->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RehabStays', 'action' => 'view', $rehabStays->stay_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RehabStays', 'action' => 'edit', $rehabStays->stay_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RehabStays', 'action' => 'delete', $rehabStays->stay_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabStays->stay_id)]) ?>
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
