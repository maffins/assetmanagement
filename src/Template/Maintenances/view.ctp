<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Maintenance'), ['action' => 'edit', $maintenance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Maintenance'), ['action' => 'delete', $maintenance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maintenances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maintenance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maintenances view large-9 medium-8 columns content">
    <h3><?= h($maintenance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $maintenance->has('user') ? $this->Html->link($maintenance->user->id, ['controller' => 'Users', 'action' => 'view', $maintenance->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle') ?></th>
            <td><?= $maintenance->has('vehicle') ? $this->Html->link($maintenance->vehicle->id, ['controller' => 'Vehicles', 'action' => 'view', $maintenance->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Number') ?></th>
            <td><?= h($maintenance->contact_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($maintenance->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($maintenance->modified_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Dealer Id') ?></th>
            <td><?= $this->Number->format($maintenance->dealer_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Reciept Id') ?></th>
            <td><?= $this->Number->format($maintenance->reciept_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($maintenance->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($maintenance->modified) ?></td>
        </tr>
    </table>
</div>
