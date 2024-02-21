<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabType $rehabType
 * @var string[]|\Cake\Collection\CollectionInterface $recipients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rehabType->type_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rehabType->type_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rehab Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabTypes form content">
            <?= $this->Form->create($rehabType) ?>
            <fieldset>
                <legend><?= __('Edit Rehab Type') ?></legend>
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
