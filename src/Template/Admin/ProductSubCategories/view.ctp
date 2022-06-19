<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $productSubCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Sub Category'), ['action' => 'edit', $productSubCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Sub Category'), ['action' => 'delete', $productSubCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productSubCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Sub Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Sub Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productSubCategories view large-9 medium-8 columns content">
    <h3><?= h($productSubCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($productSubCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($productSubCategory->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productSubCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Category Id') ?></th>
            <td><?= $this->Number->format($productSubCategory->product_category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($productSubCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($productSubCategory->modified) ?></td>
        </tr>
    </table>
</div>
