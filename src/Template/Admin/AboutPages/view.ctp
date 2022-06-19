<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $aboutPage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit About Page'), ['action' => 'edit', $aboutPage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete About Page'), ['action' => 'delete', $aboutPage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aboutPage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List About Pages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New About Page'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aboutPages view large-9 medium-8 columns content">
    <h3><?= h($aboutPage->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($aboutPage->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($aboutPage->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aboutPage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aboutPage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aboutPage->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Sub Title') ?></h4>
        <?= $this->Text->autoParagraph(h($aboutPage->sub_title)); ?>
    </div>
</div>
