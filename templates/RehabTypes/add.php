<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabType $rehabType
 * @var \Cake\Collection\CollectionInterface|string[] $recipients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rehab Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabTypes form content">
            <?= $this->Form->create($rehabType) ?>
            <fieldset>
                <legend><?= __('Add Rehab Type') ?></legend>
                <?php
                    echo $this->Form->control('type_name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('recipients._ids', ['options' => $recipients]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
