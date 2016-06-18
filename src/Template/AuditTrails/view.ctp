<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Audit Trail'), ['action' => 'edit', $auditTrail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Audit Trail'), ['action' => 'delete', $auditTrail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auditTrail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Audit Trails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit Trail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="auditTrails view large-9 medium-8 columns content">
    <h3><?= h($auditTrail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $auditTrail->has('user') ? $this->Html->link($auditTrail->user->id, ['controller' => 'Users', 'action' => 'view', $auditTrail->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Ip Address') ?></th>
            <td><?= h($auditTrail->ip_address) ?></td>
        </tr>
        <tr>
            <th><?= __('Device Type') ?></th>
            <td><?= h($auditTrail->device_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($auditTrail->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($auditTrail->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Discription') ?></h4>
        <?= $this->Text->autoParagraph(h($auditTrail->discription)); ?>
    </div>
</div>
