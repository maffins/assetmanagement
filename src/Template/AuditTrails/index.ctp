<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Audit Trail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="auditTrails index large-9 medium-8 columns content">
    <h3><?= __('Audit Trails') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('ip_address') ?></th>
                <th><?= $this->Paginator->sort('device_type') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($auditTrails as $auditTrail): ?>
            <tr>
                <td><?= $this->Number->format($auditTrail->id) ?></td>
                <td><?= $auditTrail->has('user') ? $this->Html->link($auditTrail->user->id, ['controller' => 'Users', 'action' => 'view', $auditTrail->user->id]) : '' ?></td>
                <td><?= h($auditTrail->ip_address) ?></td>
                <td><?= h($auditTrail->device_type) ?></td>
                <td><?= h($auditTrail->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $auditTrail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $auditTrail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $auditTrail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auditTrail->id)]) ?>
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
