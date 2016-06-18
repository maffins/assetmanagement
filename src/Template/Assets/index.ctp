<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stolen'), ['controller' => 'Stolen', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stolen'), ['controller' => 'Stolen', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assets index large-9 medium-8 columns content">
    <h3><?= __('Assets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('modified_by') ?></th>
                <th><?= $this->Paginator->sort('asset_type_id') ?></th>
                <th><?= $this->Paginator->sort('allocation') ?></th>
                <th><?= $this->Paginator->sort('asset_value') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('craeted') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assets as $asset): ?>
            <tr>
                <td><?= $this->Number->format($asset->id) ?></td>
                <td><?= $asset->has('user') ? $this->Html->link($asset->user->id, ['controller' => 'Users', 'action' => 'view', $asset->user->id]) : '' ?></td>
                <td><?= $this->Number->format($asset->modified_by) ?></td>
                <td><?= $this->Number->format($asset->asset_type_id) ?></td>
                <td><?= h($asset->allocation) ?></td>
                <td><?= $this->Number->format($asset->asset_value) ?></td>
                <td><?= h($asset->status) ?></td>
                <td><?= h($asset->craeted) ?></td>
                <td><?= h($asset->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $asset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $asset->id)]) ?>
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
