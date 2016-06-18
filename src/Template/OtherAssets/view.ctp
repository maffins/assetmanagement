<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Other Asset'), ['action' => 'edit', $otherAsset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Other Asset'), ['action' => 'delete', $otherAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otherAsset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Other Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Other Asset'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="otherAssets view large-9 medium-8 columns content">
    <h3><?= h($otherAsset->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($otherAsset->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($otherAsset->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($otherAsset->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($otherAsset->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($otherAsset->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Specification') ?></h4>
        <?= $this->Text->autoParagraph(h($otherAsset->specification)); ?>
    </div>
</div>
