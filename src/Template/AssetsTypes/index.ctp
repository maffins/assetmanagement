<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Assets Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetsTypes index large-9 medium-8 columns content">
    <h3><?= __('Assets Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('careated') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assetsTypes as $assetsType): ?>
            <tr>
                <td><?= $this->Number->format($assetsType->id) ?></td>
                <td><?= $assetsType->has('user') ? $this->Html->link($assetsType->user->id, ['controller' => 'Users', 'action' => 'view', $assetsType->user->id]) : '' ?></td>
                <td><?= h($assetsType->name) ?></td>
                <td><?= h($assetsType->careated) ?></td>
                <td><?= h($assetsType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assetsType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assetsType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assetsType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetsType->id)]) ?>
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
