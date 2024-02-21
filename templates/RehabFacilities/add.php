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
            <?= $this->Html->link(__('List Rehab Facilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabFacilities form content">
            <?= $this->Form->create($rehabFacility) ?>
            <fieldset>
                <legend><?= __('Add Rehab Facility') ?></legend>
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
