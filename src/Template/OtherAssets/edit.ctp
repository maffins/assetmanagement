<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $otherAsset->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $otherAsset->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Other Assets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="otherAssets form large-9 medium-8 columns content">
    <?= $this->Form->create($otherAsset) ?>
    <fieldset>
        <legend><?= __('Edit Other Asset') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('specification');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
