<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $contactPage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact Page'), ['action' => 'edit', $contactPage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact Page'), ['action' => 'delete', $contactPage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactPage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact Pages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Page'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactPages view large-9 medium-8 columns content">
    <h3><?= h($contactPage->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Map Link') ?></th>
            <td><?= h($contactPage->map_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contactPage->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Address') ?></th>
            <td><?= h($contactPage->email_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($contactPage->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactPage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contactPage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contactPage->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comments') ?></h4>
        <?= $this->Text->autoParagraph(h($contactPage->comments)); ?>
    </div>
</div>
