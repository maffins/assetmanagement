<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Other Assets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="otherAssets form large-9 medium-8 columns content">
    <?= $this->Form->create($otherAsset) ?>
    <fieldset>
        <legend><?= __('Add Other Asset') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('specification');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
