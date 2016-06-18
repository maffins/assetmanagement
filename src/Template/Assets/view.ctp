<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset'), ['action' => 'edit', $asset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset'), ['action' => 'delete', $asset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $asset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stolen'), ['controller' => 'Stolen', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stolen'), ['controller' => 'Stolen', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assets view large-9 medium-8 columns content">
    <h3><?= h($asset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $asset->has('user') ? $this->Html->link($asset->user->id, ['controller' => 'Users', 'action' => 'view', $asset->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Allocation') ?></th>
            <td><?= h($asset->allocation) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($asset->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($asset->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($asset->modified_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Asset Type Id') ?></th>
            <td><?= $this->Number->format($asset->asset_type_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Asset Value') ?></th>
            <td><?= $this->Number->format($asset->asset_value) ?></td>
        </tr>
        <tr>
            <th><?= __('Craeted') ?></th>
            <td><?= h($asset->craeted) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($asset->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Stolen') ?></h4>
        <?php if (!empty($asset->stolen)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Asset Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Stolen Area') ?></th>
                <th><?= __('Date Stolen') ?></th>
                <th><?= __('Reported') ?></th>
                <th><?= __('Station Name') ?></th>
                <th><?= __('Case Number') ?></th>
                <th><?= __('Investigation Office') ?></th>
                <th><?= __('Telephone') ?></th>
                <th><?= __('Cellphone') ?></th>
                <th><?= __('Comments') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($asset->stolen as $stolen): ?>
            <tr>
                <td><?= h($stolen->id) ?></td>
                <td><?= h($stolen->asset_id) ?></td>
                <td><?= h($stolen->user_id) ?></td>
                <td><?= h($stolen->stolen_area) ?></td>
                <td><?= h($stolen->date_stolen) ?></td>
                <td><?= h($stolen->reported) ?></td>
                <td><?= h($stolen->station_name) ?></td>
                <td><?= h($stolen->case_number) ?></td>
                <td><?= h($stolen->investigation_office) ?></td>
                <td><?= h($stolen->telephone) ?></td>
                <td><?= h($stolen->cellphone) ?></td>
                <td><?= h($stolen->comments) ?></td>
                <td><?= h($stolen->created) ?></td>
                <td><?= h($stolen->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stolen', 'action' => 'view', $stolen->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stolen', 'action' => 'edit', $stolen->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stolen', 'action' => 'delete', $stolen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stolen->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
