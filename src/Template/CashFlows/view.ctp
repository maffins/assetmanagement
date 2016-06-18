<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cash Flow'), ['action' => 'edit', $cashFlow->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cash Flow'), ['action' => 'delete', $cashFlow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashFlow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cash Flows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cash Flow'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drivers'), ['controller' => 'Drivers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Driver'), ['controller' => 'Drivers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cashFlows view large-9 medium-8 columns content">
    <h3><?= h($cashFlow->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $cashFlow->has('user') ? $this->Html->link($cashFlow->user->id, ['controller' => 'Users', 'action' => 'view', $cashFlow->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cashFlow->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($cashFlow->modified_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Driver Id') ?></th>
            <td><?= $this->Number->format($cashFlow->driver_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Litres') ?></th>
            <td><?= $this->Number->format($cashFlow->litres) ?></td>
        </tr>
        <tr>
            <th><?= __('Amount') ?></th>
            <td><?= $this->Number->format($cashFlow->amount) ?></td>
        </tr>
        <tr>
            <th><?= __('Fuel Price') ?></th>
            <td><?= $this->Number->format($cashFlow->fuel_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($cashFlow->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($cashFlow->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Drivers') ?></h4>
        <?php if (!empty($cashFlow->drivers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Modified By') ?></th>
                <th><?= __('Fname') ?></th>
                <th><?= __('Lname') ?></th>
                <th><?= __('Id Number') ?></th>
                <th><?= __('Contact Number') ?></th>
                <th><?= __('Licence Expiry Date') ?></th>
                <th><?= __('Cash Flow Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cashFlow->drivers as $drivers): ?>
            <tr>
                <td><?= h($drivers->id) ?></td>
                <td><?= h($drivers->user_id) ?></td>
                <td><?= h($drivers->modified_by) ?></td>
                <td><?= h($drivers->fname) ?></td>
                <td><?= h($drivers->lname) ?></td>
                <td><?= h($drivers->id_number) ?></td>
                <td><?= h($drivers->contact_number) ?></td>
                <td><?= h($drivers->licence_expiry_date) ?></td>
                <td><?= h($drivers->cash_flow_id) ?></td>
                <td><?= h($drivers->created) ?></td>
                <td><?= h($drivers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Drivers', 'action' => 'view', $drivers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Drivers', 'action' => 'edit', $drivers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Drivers', 'action' => 'delete', $drivers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drivers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
