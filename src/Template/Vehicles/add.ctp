<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maintenances'), ['controller' => 'Maintenances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maintenance'), ['controller' => 'Maintenances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicle, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Vehicle') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'type' => 'hidden']);
            echo $this->Form->input('modified_by', ['type' => 'hidden']);
            echo $this->Form->input('dna_id_code');
            echo $this->Form->input('battery_serial_number');
            echo $this->Form->input('registration_number');
            echo $this->Form->input('engine_number');
            echo $this->Form->input('chassis_number');
            echo $this->Form->input('make');
            echo $this->Form->input('model');
            echo $this->Form->input('color');
            echo $this->Form->input('year', ['type' => 'year']);
            echo $this->Form->input('kilometer');
            echo $this->Form->input('service_due_date', ['type' => 'text', 'id' => 'datetimepicker10']);
            echo $this->Form->input('warranty_expiry_date', ['type' => 'text']);
            echo $this->Form->input('certificate', ['type' => 'file']);
        ?>
    </fieldset>
    <br />
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
