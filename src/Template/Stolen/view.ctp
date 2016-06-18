<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Stolen'), ['action' => 'edit', $stolen->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stolen'), ['action' => 'delete', $stolen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stolen->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stolen'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stolen'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stolen view large-9 medium-8 columns content">
    <h3><?= h($stolen->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Asset') ?></th>
            <td><?= $stolen->has('asset') ? $this->Html->link($stolen->asset->id, ['controller' => 'Assets', 'action' => 'view', $stolen->asset->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $stolen->has('user') ? $this->Html->link($stolen->user->id, ['controller' => 'Users', 'action' => 'view', $stolen->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Stolen Area') ?></th>
            <td><?= h($stolen->stolen_area) ?></td>
        </tr>
        <tr>
            <th><?= __('Station Name') ?></th>
            <td><?= h($stolen->station_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Case Number') ?></th>
            <td><?= h($stolen->case_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Investigation Office') ?></th>
            <td><?= h($stolen->investigation_office) ?></td>
        </tr>
        <tr>
            <th><?= __('Telephone') ?></th>
            <td><?= h($stolen->telephone) ?></td>
        </tr>
        <tr>
            <th><?= __('Cellphone') ?></th>
            <td><?= h($stolen->cellphone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($stolen->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Stolen') ?></th>
            <td><?= h($stolen->date_stolen) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($stolen->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($stolen->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Reported') ?></th>
            <td><?= $stolen->reported ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comments') ?></h4>
        <?= $this->Text->autoParagraph(h($stolen->comments)); ?>
    </div>
</div>
