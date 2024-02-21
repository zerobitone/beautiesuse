<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabStay $rehabStay
 * @var \Cake\Collection\CollectionInterface|string[] $recipients
 * @var \Cake\Collection\CollectionInterface|string[] $socialInsuranceProviders
 * @var \Cake\Collection\CollectionInterface|string[] $rehabFacilities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rehab Stays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabStays form content">
            <?= $this->Form->create($rehabStay) ?>
            <fieldset>
                <legend><?= __('Add Rehab Stay') ?></legend>
                <?php
                    echo $this->Form->control('recipient_id', ['options' => $recipients, 'empty' => true]);
                    echo $this->Form->control('social_insurance_provider_id', ['options' => $socialInsuranceProviders, 'empty' => true]);
                    echo $this->Form->control('facility_id', ['options' => $rehabFacilities, 'empty' => true]);
                    echo $this->Form->control('status');
                    echo $this->Form->control('start_date', ['empty' => true]);
                    echo $this->Form->control('end_date', ['empty' => true]);
                    echo $this->Form->control('length_of_stay');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
