<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DoctorsRegistration $doctorsRegistration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Doctors Registration'), ['action' => 'edit', $doctorsRegistration->doctor_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Doctors Registration'), ['action' => 'delete', $doctorsRegistration->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsRegistration->doctor_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Doctors Registration'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Doctors Registration'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctorsRegistration view content">
            <h3><?= h($doctorsRegistration->doctor_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Doctor Id') ?></th>
                    <td><?= $this->Number->format($doctorsRegistration->doctor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Date') ?></th>
                    <td><?= h($doctorsRegistration->registration_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($doctorsRegistration->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($doctorsRegistration->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
