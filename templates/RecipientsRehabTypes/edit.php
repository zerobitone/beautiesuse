<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientsRehabType $recipientsRehabType
 * @var string[]|\Cake\Collection\CollectionInterface $recipients
 * @var string[]|\Cake\Collection\CollectionInterface $rehabTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recipientsRehabType->recipient_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recipientsRehabType->recipient_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Recipients Rehab Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientsRehabTypes form content">
            <?= $this->Form->create($recipientsRehabType) ?>
            <fieldset>
                <legend><?= __('Edit Recipients Rehab Type') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
