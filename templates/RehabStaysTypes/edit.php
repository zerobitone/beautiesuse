<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabStaysType $rehabStaysType
 * @var string[]|\Cake\Collection\CollectionInterface $rehabStays
 * @var string[]|\Cake\Collection\CollectionInterface $rehabTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rehabStaysType->stay_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rehabStaysType->stay_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rehab Stays Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabStaysTypes form content">
            <?= $this->Form->create($rehabStaysType) ?>
            <fieldset>
                <legend><?= __('Edit Rehab Stays Type') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
