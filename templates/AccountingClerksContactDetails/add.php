<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingClerksContactDetail $accountingClerksContactDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Accounting Clerks Contact Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="accountingClerksContactDetails form content">
            <?= $this->Form->create($accountingClerksContactDetail) ?>
            <fieldset>
                <legend><?= __('Add Accounting Clerks Contact Detail') ?></legend>
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
