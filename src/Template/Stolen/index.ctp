<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stolen'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stolen index large-9 medium-8 columns content">
    <h3><?= __('Stolen') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('asset_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('stolen_area') ?></th>
                <th><?= $this->Paginator->sort('date_stolen') ?></th>
                <th><?= $this->Paginator->sort('reported') ?></th>
                <th><?= $this->Paginator->sort('station_name') ?></th>
                <th><?= $this->Paginator->sort('case_number') ?></th>
                <th><?= $this->Paginator->sort('investigation_office') ?></th>
                <th><?= $this->Paginator->sort('telephone') ?></th>
                <th><?= $this->Paginator->sort('cellphone') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stolen as $stolen): ?>
            <tr>
                <td><?= $this->Number->format($stolen->id) ?></td>
                <td><?= $stolen->has('asset') ? $this->Html->link($stolen->asset->id, ['controller' => 'Assets', 'action' => 'view', $stolen->asset->id]) : '' ?></td>
                <td><?= $stolen->has('user') ? $this->Html->link($stolen->user->id, ['controller' => 'Users', 'action' => 'view', $stolen->user->id]) : '' ?></td>
                <td><?= h($stolen->stolen_area) ?></td>
                <td><?= h($stolen->date_stolen) ?></td>
                <td><?= h($stolen->reported) ?></td>
                <td><?= h($stolen->station_name) ?></td>
                <td><?= h($stolen->case_number) ?></td>
                <td><?= h($stolen->investigation_office) ?></td>
                <td><?= h($stolen->telephone) ?></td>
                <td><?= h($stolen->cellphone) ?></td>
                <td><?= h($stolen->created) ?></td>
                <td><?= h($stolen->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stolen->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stolen->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stolen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stolen->id)]) ?>
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
