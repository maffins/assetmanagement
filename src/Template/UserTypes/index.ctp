
<div class="userTypes index large-9 medium-8 columns content">
    <h3><?= __('User Types') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="asset-tables" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
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
            <?php foreach ($userTypes as $userType): ?>
            <tr>
                <td><?= $this->Number->format($userType->id) ?></td>
                <td><?= h($userType->name) ?></td>
                <td><?= h($userType->created) ?></td>
                <td><?= h($userType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userType->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br />
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New User Type'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        </ul>
    </nav>
</div>
