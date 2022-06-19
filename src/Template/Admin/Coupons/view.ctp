<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $coupon
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coupon'), ['action' => 'edit', $coupon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coupon'), ['action' => 'delete', $coupon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coupons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupon'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coupons view large-9 medium-8 columns content">
    <h3><?= h($coupon->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($coupon->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount Greater') ?></th>
            <td><?= h($coupon->amount_greater) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coupon->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($coupon->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount Type') ?></th>
            <td><?= $this->Number->format($coupon->discount_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bulk Discount') ?></th>
            <td><?= $this->Number->format($coupon->bulk_discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiry Date') ?></th>
            <td><?= h($coupon->expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($coupon->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($coupon->modified) ?></td>
        </tr>
    </table>
</div>
