<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cashFlow->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cashFlow->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cash Flows'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drivers'), ['controller' => 'Drivers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Driver'), ['controller' => 'Drivers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cashFlows form large-9 medium-8 columns content">
    <?= $this->Form->create($cashFlow) ?>
    <fieldset>
        <legend><?= __('Edit Cash Flow') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('modified_by');
            echo $this->Form->input('driver_id');
            echo $this->Form->input('litres');
            echo $this->Form->input('amount');
            echo $this->Form->input('fuel_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
