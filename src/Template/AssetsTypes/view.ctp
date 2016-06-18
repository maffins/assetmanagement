<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assets Type'), ['action' => 'edit', $assetsType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assets Type'), ['action' => 'delete', $assetsType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetsType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assets Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assets Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetsTypes view large-9 medium-8 columns content">
    <h3><?= h($assetsType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $assetsType->has('user') ? $this->Html->link($assetsType->user->id, ['controller' => 'Users', 'action' => 'view', $assetsType->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($assetsType->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($assetsType->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Careated') ?></th>
            <td><?= h($assetsType->careated) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($assetsType->modified) ?></td>
        </tr>
    </table>
</div>
