<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $socialLink
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Social Link'), ['action' => 'edit', $socialLink->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Social Link'), ['action' => 'delete', $socialLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialLink->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Social Links'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social Link'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="socialLinks view large-9 medium-8 columns content">
    <h3><?= h($socialLink->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Facebook Link') ?></th>
            <td><?= h($socialLink->facebook_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter Link') ?></th>
            <td><?= h($socialLink->twitter_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instagram Link') ?></th>
            <td><?= h($socialLink->instagram_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Linkedin Link') ?></th>
            <td><?= h($socialLink->linkedin_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pintrest Link') ?></th>
            <td><?= h($socialLink->pintrest_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Youtube Link') ?></th>
            <td><?= h($socialLink->youtube_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reserved Text') ?></th>
            <td><?= h($socialLink->reserved_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($socialLink->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Id') ?></th>
            <td><?= h($socialLink->email_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($socialLink->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gst') ?></th>
            <td><?= $this->Number->format($socialLink->gst) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($socialLink->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($socialLink->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($socialLink->address)); ?>
    </div>
</div>
