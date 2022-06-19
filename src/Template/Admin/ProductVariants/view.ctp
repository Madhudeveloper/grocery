<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $productVariant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Variant'), ['action' => 'edit', $productVariant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Variant'), ['action' => 'delete', $productVariant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productVariant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Variants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Variant'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productVariants view large-9 medium-8 columns content">
    <h3><?= h($productVariant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Variant') ?></th>
            <td><?= h($productVariant->variant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uom') ?></th>
            <td><?= h($productVariant->uom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($productVariant->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offer Percentage') ?></th>
            <td><?= h($productVariant->offer_percentage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gst Percentage') ?></th>
            <td><?= h($productVariant->gst_percentage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skucode') ?></th>
            <td><?= h($productVariant->skucode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productVariant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Id') ?></th>
            <td><?= $this->Number->format($productVariant->product_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($productVariant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($productVariant->modified) ?></td>
        </tr>
    </table>
</div>
