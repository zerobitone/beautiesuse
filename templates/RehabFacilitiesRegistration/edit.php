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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rehabFacilitiesRegistration->facility_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rehabFacilitiesRegistration->facility_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rehab Facilities Registration'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabFacilitiesRegistration form content">
            <?= $this->Form->create($rehabFacilitiesRegistration) ?>
            <fieldset>
                <legend><?= __('Edit Rehab Facilities Registration') ?></legend>
                <?php
                    echo $this->Form->control('registration_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
