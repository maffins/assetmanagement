<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Driver'), ['action' => 'edit', $driver->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Driver'), ['action' => 'delete', $driver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Drivers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Driver'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cash Flows'), ['controller' => 'CashFlows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cash Flow'), ['controller' => 'CashFlows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="drivers view large-9 medium-8 columns content">
    <h3><?= h($driver->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $driver->has('user') ? $this->Html->link($driver->user->id, ['controller' => 'Users', 'action' => 'view', $driver->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fname') ?></th>
            <td><?= h($driver->fname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lname') ?></th>
            <td><?= h($driver->lname) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Number') ?></th>
            <td><?= h($driver->id_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Number') ?></th>
            <td><?= h($driver->contact_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($driver->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($driver->modified_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Cash Flow Id') ?></th>
            <td><?= $this->Number->format($driver->cash_flow_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Licence Expiry Date') ?></th>
            <td><?= h($driver->licence_expiry_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($driver->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($driver->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cash Flows') ?></h4>
        <?php if (!empty($driver->cash_flows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Driver Id') ?></th>
                <th><?= __('Litres') ?></th>
                <th><?= __('Amount') ?></th>
                <th><?= __('Fuel Price') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($driver->cash_flows as $cashFlows): ?>
            <tr>
                <td><?= h($cashFlows->id) ?></td>
                <td><?= h($cashFlows->user_id) ?></td>
                <td><?= h($cashFlows->modified_by) ?></td>
                <td><?= h($cashFlows->driver_id) ?></td>
                <td><?= h($cashFlows->litres) ?></td>
                <td><?= h($cashFlows->amount) ?></td>
                <td><?= h($cashFlows->fuel_price) ?></td>
                <td><?= h($cashFlows->created) ?></td>
                <td><?= h($cashFlows->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CashFlows', 'action' => 'view', $cashFlows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CashFlows', 'action' => 'edit', $cashFlows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CashFlows', 'action' => 'delete', $cashFlows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashFlows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
