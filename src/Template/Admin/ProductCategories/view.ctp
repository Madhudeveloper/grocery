<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $productCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Category'), ['action' => 'edit', $productCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Category'), ['action' => 'delete', $productCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productCategories view large-9 medium-8 columns content">
    <h3><?= h($productCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($productCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($productCategory->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($productCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($productCategory->modified) ?></td>
        </tr>
    </table>
</div>
