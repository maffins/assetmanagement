<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vehicle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maintenances'), ['controller' => 'Maintenances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maintenance'), ['controller' => 'Maintenances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicle) ?>
    <fieldset>
        <legend><?= __('Edit Vehicle') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('modified_by');
            echo $this->Form->input('dna_id_code');
            echo $this->Form->input('battery_serial_number');
            echo $this->Form->input('registration_number');
            echo $this->Form->input('engine_number');
            echo $this->Form->input('chassis_number');
            echo $this->Form->input('make');
            echo $this->Form->input('model');
            echo $this->Form->input('color');
            echo $this->Form->input('year');
            echo $this->Form->input('kilometer');
            echo $this->Form->input('service_due_date');
            echo $this->Form->input('warranty_expiry_date');
            echo $this->Form->input('certificate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
