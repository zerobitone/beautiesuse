<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientsRehabType $recipientsRehabType
 * @var \Cake\Collection\CollectionInterface|string[] $recipients
 * @var \Cake\Collection\CollectionInterface|string[] $rehabTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Recipients Rehab Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientsRehabTypes form content">
            <?= $this->Form->create($recipientsRehabType) ?>
            <fieldset>
                <legend><?= __('Add Recipients Rehab Type') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
