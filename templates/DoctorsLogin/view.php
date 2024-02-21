<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DoctorsLogin $doctorsLogin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Doctors Login'), ['action' => 'edit', $doctorsLogin->doctor_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Doctors Login'), ['action' => 'delete', $doctorsLogin->doctor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsLogin->doctor_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Doctors Login'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Doctors Login'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctorsLogin view content">
            <h3><?= h($doctorsLogin->doctor_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Doctor Id') ?></th>
                    <td><?= $this->Number->format($doctorsLogin->doctor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($doctorsLogin->last_login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($doctorsLogin->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($doctorsLogin->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
