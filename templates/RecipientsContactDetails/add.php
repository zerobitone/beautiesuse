<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientsContactDetail $recipientsContactDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Recipients Contact Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientsContactDetails form content">
            <?= $this->Form->create($recipientsContactDetail) ?>
            <fieldset>
                <legend><?= __('Add Recipients Contact Detail') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
