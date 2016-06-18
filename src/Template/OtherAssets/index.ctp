<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Other Asset'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="otherAssets index large-9 medium-8 columns content">
    <h3><?= __('Other Assets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($otherAssets as $otherAsset): ?>
            <tr>
                <td><?= $this->Number->format($otherAsset->id) ?></td>
                <td><?= h($otherAsset->name) ?></td>
                <td><?= h($otherAsset->created) ?></td>
                <td><?= h($otherAsset->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $otherAsset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $otherAsset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $otherAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otherAsset->id)]) ?>
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
