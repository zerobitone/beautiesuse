<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DoctorsLogin $doctorsLogin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doctorsLogin->doctor_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doctorsLogin->doctor_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Doctors Login'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="doctorsLogin form content">
            <?= $this->Form->create($doctorsLogin) ?>
            <fieldset>
                <legend><?= __('Edit Doctors Login') ?></legend>
                <?php
                    echo $this->Form->control('last_login', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
