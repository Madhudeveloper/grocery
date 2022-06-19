<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $subbanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subbanner'), ['action' => 'edit', $subbanner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subbanner'), ['action' => 'delete', $subbanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subbanner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subbanners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subbanner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subbanners view large-9 medium-8 columns content">
    <h3><?= h($subbanner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sub Tilte') ?></th>
            <td><?= h($subbanner->sub_tilte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub Image') ?></th>
            <td><?= h($subbanner->sub_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Button Name') ?></th>
            <td><?= h($subbanner->button_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subbanner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subbanner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subbanner->modified) ?></td>
        </tr>
    </table>
</div>
