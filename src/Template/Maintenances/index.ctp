<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Maintenance'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maintenances index large-9 medium-8 columns content">
    <h3><?= __('Maintenances') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('modified_by') ?></th>
                <th><?= $this->Paginator->sort('vehicle_id') ?></th>
                <th><?= $this->Paginator->sort('dealer_id') ?></th>
                <th><?= $this->Paginator->sort('contact_number') ?></th>
                <th><?= $this->Paginator->sort('reciept_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maintenances as $maintenance): ?>
            <tr>
                <td><?= $this->Number->format($maintenance->id) ?></td>
                <td><?= $maintenance->has('user') ? $this->Html->link($maintenance->user->id, ['controller' => 'Users', 'action' => 'view', $maintenance->user->id]) : '' ?></td>
                <td><?= $this->Number->format($maintenance->modified_by) ?></td>
                <td><?= $maintenance->has('vehicle') ? $this->Html->link($maintenance->vehicle->id, ['controller' => 'Vehicles', 'action' => 'view', $maintenance->vehicle->id]) : '' ?></td>
                <td><?= $this->Number->format($maintenance->dealer_id) ?></td>
                <td><?= h($maintenance->contact_number) ?></td>
                <td><?= $this->Number->format($maintenance->reciept_id) ?></td>
                <td><?= h($maintenance->created) ?></td>
                <td><?= h($maintenance->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $maintenance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maintenance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maintenance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenance->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
