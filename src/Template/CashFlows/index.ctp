<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cash Flow'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drivers'), ['controller' => 'Drivers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Driver'), ['controller' => 'Drivers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cashFlows index large-9 medium-8 columns content">
    <h3><?= __('Cash Flows') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('modified_by') ?></th>
                <th><?= $this->Paginator->sort('driver_id') ?></th>
                <th><?= $this->Paginator->sort('litres') ?></th>
                <th><?= $this->Paginator->sort('amount') ?></th>
                <th><?= $this->Paginator->sort('fuel_price') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cashFlows as $cashFlow): ?>
            <tr>
                <td><?= $this->Number->format($cashFlow->id) ?></td>
                <td><?= $cashFlow->has('user') ? $this->Html->link($cashFlow->user->id, ['controller' => 'Users', 'action' => 'view', $cashFlow->user->id]) : '' ?></td>
                <td><?= $this->Number->format($cashFlow->modified_by) ?></td>
                <td><?= $this->Number->format($cashFlow->driver_id) ?></td>
                <td><?= $this->Number->format($cashFlow->litres) ?></td>
                <td><?= $this->Number->format($cashFlow->amount) ?></td>
                <td><?= $this->Number->format($cashFlow->fuel_price) ?></td>
                <td><?= h($cashFlow->created) ?></td>
                <td><?= h($cashFlow->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cashFlow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cashFlow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cashFlow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashFlow->id)]) ?>
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
