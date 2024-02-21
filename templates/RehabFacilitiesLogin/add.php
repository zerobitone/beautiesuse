<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabFacilitiesLogin $rehabFacilitiesLogin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rehab Facilities Login'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rehabFacilitiesLogin form content">
            <?= $this->Form->create($rehabFacilitiesLogin) ?>
            <fieldset>
                <legend><?= __('Add Rehab Facilities Login') ?></legend>
                <?php
                    echo $this->Form->control('last_login', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
