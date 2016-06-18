
<div class="vehicles index large-9 medium-8 columns content">
    <h3><?= __('Vehicles') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="asset-tables" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
    <thead>
            <tr>
                <th><?= $this->Paginator->sort('dna_id_code') ?></th>
                <th><?= $this->Paginator->sort('battery_serial_number') ?></th>
                <th><?= $this->Paginator->sort('registration_number') ?></th>
                <th><?= $this->Paginator->sort('engine_number') ?></th>
                <th><?= $this->Paginator->sort('chassis_number') ?></th>
                <th><?= $this->Paginator->sort('make') ?></th>
                <th><?= $this->Paginator->sort('model') ?></th>
                <th><?= $this->Paginator->sort('color') ?></th>
                <th><?= $this->Paginator->sort('kilometer') ?></th>
                <th><?= $this->Paginator->sort('service_due_date') ?></th>
                <th><?= $this->Paginator->sort('warranty_expiry_date') ?></th>
                <th><?= $this->Paginator->sort('certificate') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehicles as $vehicle): ?>
            <tr>

                <td><?= h($vehicle->dna_id_code) ?></td>
                <td><?= h($vehicle->battery_serial_number) ?></td>
                <td><?= h($vehicle->registration_number) ?></td>
                <td><?= h($vehicle->engine_number) ?></td>
                <td><?= h($vehicle->chassis_number) ?></td>
                <td><?= h($vehicle->make) ?></td>
                <td><?= h($vehicle->model) ?></td>
                <td><?= h($vehicle->color) ?></td>
                <td><?= h($vehicle->kilometer) ?></td>
                <td><?= h($vehicle->service_due_date) ?></td>
                <td><?= h($vehicle->warranty_expiry_date) ?></td>
                <td><?= h($vehicle->certificate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vehicle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehicle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br />
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Maintenances'), ['controller' => 'Maintenances', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Maintenance'), ['controller' => 'Maintenances', 'action' => 'add']) ?></li>
        </ul>
    </nav>
</div>
