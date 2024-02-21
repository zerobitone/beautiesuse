<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabFacilitiesLogin $rehabFacilitiesLogin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rehab Facilities Login'), ['action' => 'edit', $rehabFacilitiesLogin->facility_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rehab Facilities Login'), ['action' => 'delete', $rehabFacilitiesLogin->facility_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabFacilitiesLogin->facility_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rehab Facilities Login'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rehab Facilities Login'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabFacilitiesLogin view content">
            <h3><?= h($rehabFacilitiesLogin->facility_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Facility Id') ?></th>
                    <td><?= $this->Number->format($rehabFacilitiesLogin->facility_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($rehabFacilitiesLogin->last_login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rehabFacilitiesLogin->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($rehabFacilitiesLogin->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
