<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabStaysType $rehabStaysType
 * @var \Cake\Collection\CollectionInterface|string[] $rehabStays
 * @var \Cake\Collection\CollectionInterface|string[] $rehabTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rehab Stays Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabStaysTypes form content">
            <?= $this->Form->create($rehabStaysType) ?>
            <fieldset>
                <legend><?= __('Add Rehab Stays Type') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
