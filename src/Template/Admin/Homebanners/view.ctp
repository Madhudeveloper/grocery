<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $homebanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Homebanner'), ['action' => 'edit', $homebanner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Homebanner'), ['action' => 'delete', $homebanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homebanner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Homebanners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Homebanner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="homebanners view large-9 medium-8 columns content">
    <h3><?= h($homebanner->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($homebanner->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub Title') ?></th>
            <td><?= h($homebanner->sub_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($homebanner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($homebanner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($homebanner->modified) ?></td>
        </tr>
    </table>
</div>
