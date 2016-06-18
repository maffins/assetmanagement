<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assets Types'), ['controller' => 'AssetsTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assets Type'), ['controller' => 'AssetsTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Audit Trails'), ['controller' => 'AuditTrails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Audit Trail'), ['controller' => 'AuditTrails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cash Flows'), ['controller' => 'CashFlows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cash Flow'), ['controller' => 'CashFlows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drivers'), ['controller' => 'Drivers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Driver'), ['controller' => 'Drivers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maintenances'), ['controller' => 'Maintenances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maintenance'), ['controller' => 'Maintenances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Receipts'), ['controller' => 'Receipts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Receipt'), ['controller' => 'Receipts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stolen'), ['controller' => 'Stolen', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stolen'), ['controller' => 'Stolen', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('user_type_id', ['options' => $userTypes]);
            echo $this->Form->input('fname');
            echo $this->Form->input('lname');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('email');
            echo $this->Form->input('employee_number');
            echo $this->Form->input('cellphone');
            echo $this->Form->input('permissions');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
