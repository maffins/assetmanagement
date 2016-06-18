<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Driver'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cash Flows'), ['controller' => 'CashFlows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cash Flow'), ['controller' => 'CashFlows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drivers index large-9 medium-8 columns content">
    <h3><?= __('Drivers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('modified_by') ?></th>
                <th><?= $this->Paginator->sort('fname') ?></th>
                <th><?= $this->Paginator->sort('lname') ?></th>
                <th><?= $this->Paginator->sort('id_number') ?></th>
                <th><?= $this->Paginator->sort('contact_number') ?></th>
                <th><?= $this->Paginator->sort('licence_expiry_date') ?></th>
                <th><?= $this->Paginator->sort('cash_flow_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drivers as $driver): ?>
            <tr>
                <td><?= $this->Number->format($driver->id) ?></td>
                <td><?= $driver->has('user') ? $this->Html->link($driver->user->id, ['controller' => 'Users', 'action' => 'view', $driver->user->id]) : '' ?></td>
                <td><?= $this->Number->format($driver->modified_by) ?></td>
                <td><?= h($driver->fname) ?></td>
                <td><?= h($driver->lname) ?></td>
                <td><?= h($driver->id_number) ?></td>
                <td><?= h($driver->contact_number) ?></td>
                <td><?= h($driver->licence_expiry_date) ?></td>
                <td><?= $this->Number->format($driver->cash_flow_id) ?></td>
                <td><?= h($driver->created) ?></td>
                <td><?= h($driver->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $driver->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $driver->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $driver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id)]) ?>
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
