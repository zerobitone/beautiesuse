<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabFacility $rehabFacility
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rehabFacility->facility_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rehabFacility->facility_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rehab Facilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabFacilities form content">
            <?= $this->Form->create($rehabFacility) ?>
            <fieldset>
                <legend><?= __('Edit Rehab Facility') ?></legend>
                <?php
                    echo $this->Form->control('street_address_line1');
                    echo $this->Form->control('street_address_line2');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state_province');
                    echo $this->Form->control('postal_code');
                    echo $this->Form->control('country');
                    echo $this->Form->control('avatar_path');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
