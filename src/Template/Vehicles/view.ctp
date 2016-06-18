<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle'), ['action' => 'edit', $vehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Maintenances'), ['controller' => 'Maintenances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maintenance'), ['controller' => 'Maintenances', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicles view large-9 medium-8 columns content">
    <h3><?= h($vehicle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $vehicle->has('user') ? $this->Html->link($vehicle->user->id, ['controller' => 'Users', 'action' => 'view', $vehicle->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Dna Id Code') ?></th>
            <td><?= h($vehicle->dna_id_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Battery Serial Number') ?></th>
            <td><?= h($vehicle->battery_serial_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Registration Number') ?></th>
            <td><?= h($vehicle->registration_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Engine Number') ?></th>
            <td><?= h($vehicle->engine_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Chassis Number') ?></th>
            <td><?= h($vehicle->chassis_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Make') ?></th>
            <td><?= h($vehicle->make) ?></td>
        </tr>
        <tr>
            <th><?= __('Model') ?></th>
            <td><?= h($vehicle->model) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= h($vehicle->color) ?></td>
        </tr>
        <tr>
            <th><?= __('Kilometer') ?></th>
            <td><?= h($vehicle->kilometer) ?></td>
        </tr>
        <tr>
            <th><?= __('Certificate') ?></th>
            <td><?= h($vehicle->certificate) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicle->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($vehicle->modified_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Service Due Date') ?></th>
            <td><?= h($vehicle->service_due_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Warranty Expiry Date') ?></th>
            <td><?= h($vehicle->warranty_expiry_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicle->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vehicle->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Year') ?></h4>
        <?= $this->Text->autoParagraph(h($vehicle->year)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Maintenances') ?></h4>
        <?php if (!empty($vehicle->maintenances)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Vehicle Id') ?></th>
                <th><?= __('Dealer Id') ?></th>
                <th><?= __('Contact Number') ?></th>
                <th><?= __('Reciept Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->maintenances as $maintenances): ?>
            <tr>
                <td><?= h($maintenances->id) ?></td>
                <td><?= h($maintenances->user_id) ?></td>
                <td><?= h($maintenances->modified_by) ?></td>
                <td><?= h($maintenances->vehicle_id) ?></td>
                <td><?= h($maintenances->dealer_id) ?></td>
                <td><?= h($maintenances->contact_number) ?></td>
                <td><?= h($maintenances->reciept_id) ?></td>
                <td><?= h($maintenances->created) ?></td>
                <td><?= h($maintenances->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Maintenances', 'action' => 'view', $maintenances->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Maintenances', 'action' => 'edit', $maintenances->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Maintenances', 'action' => 'delete', $maintenances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenances->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
