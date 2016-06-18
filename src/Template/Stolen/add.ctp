<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Stolen'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stolen form large-9 medium-8 columns content">
    <?= $this->Form->create($stolen) ?>
    <fieldset>
        <legend><?= __('Add Stolen') ?></legend>
        <?php
            echo $this->Form->input('asset_id', ['options' => $assets]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('stolen_area');
            echo $this->Form->input('date_stolen');
            echo $this->Form->input('reported');
            echo $this->Form->input('station_name');
            echo $this->Form->input('case_number');
            echo $this->Form->input('investigation_office');
            echo $this->Form->input('telephone');
            echo $this->Form->input('cellphone');
            echo $this->Form->input('comments');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
