<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Doctor'), ['action' => 'edit', $doctor->doctor_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Doctor'), ['action' => 'delete', $doctor->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->doctor_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Doctors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Doctor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctors view content">
            <h3><?= h($doctor->doctor_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Doctor Lastname') ?></th>
                    <td><?= h($doctor->doctor_lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Doctor Firstname') ?></th>
                    <td><?= h($doctor->doctor_firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($doctor->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($doctor->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar Path') ?></th>
                    <td><?= h($doctor->avatar_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Doctor Id') ?></th>
                    <td><?= $this->Number->format($doctor->doctor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($doctor->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($doctor->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Recipients') ?></h4>
                <?php if (!empty($doctor->recipients)) : ?>
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
                        <?php foreach ($doctor->recipients as $recipients) : ?>
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
