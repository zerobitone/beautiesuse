<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabFacilitiesRegistration $rehabFacilitiesRegistration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rehab Facilities Registration'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabFacilitiesRegistration form content">
            <?= $this->Form->create($rehabFacilitiesRegistration) ?>
            <fieldset>
                <legend><?= __('Add Rehab Facilities Registration') ?></legend>
                <?php
                    echo $this->Form->control('registration_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
