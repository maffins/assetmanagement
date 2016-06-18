<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Receipt'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="receipts index large-9 medium-8 columns content">
    <h3><?= __('Receipts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('modified_by') ?></th>
                <th><?= $this->Paginator->sort('dealer_id') ?></th>
                <th><?= $this->Paginator->sort('receipt_folder') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($receipts as $receipt): ?>
            <tr>
                <td><?= $this->Number->format($receipt->id) ?></td>
                <td><?= $receipt->has('user') ? $this->Html->link($receipt->user->id, ['controller' => 'Users', 'action' => 'view', $receipt->user->id]) : '' ?></td>
                <td><?= $this->Number->format($receipt->modified_by) ?></td>
                <td><?= $this->Number->format($receipt->dealer_id) ?></td>
                <td><?= h($receipt->receipt_folder) ?></td>
                <td><?= h($receipt->created) ?></td>
                <td><?= h($receipt->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $receipt->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $receipt->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $receipt->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receipt->id)]) ?>
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
