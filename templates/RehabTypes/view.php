<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabType $rehabType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rehab Type'), ['action' => 'edit', $rehabType->type_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rehab Type'), ['action' => 'delete', $rehabType->type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabType->type_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rehab Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rehab Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabTypes view content">
            <h3><?= h($rehabType->type_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type Name') ?></th>
                    <td><?= h($rehabType->type_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type Id') ?></th>
                    <td><?= $this->Number->format($rehabType->type_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rehabType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($rehabType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($rehabType->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Recipients') ?></h4>
                <?php if (!empty($rehabType->recipients)) : ?>
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
                        <?php foreach ($rehabType->recipients as $recipients) : ?>
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
