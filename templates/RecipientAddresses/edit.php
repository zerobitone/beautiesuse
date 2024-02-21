<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RecipientAddress $recipientAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recipientAddress->recipient_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recipientAddress->recipient_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Recipient Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="recipientAddresses form content">
            <?= $this->Form->create($recipientAddress) ?>
            <fieldset>
                <legend><?= __('Edit Recipient Address') ?></legend>
                <?php
                    echo $this->Form->control('street_address_line1');
                    echo $this->Form->control('street_address_line2');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state_province');
                    echo $this->Form->control('postal_code');
                    echo $this->Form->control('country');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
