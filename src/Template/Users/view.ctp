<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions Logins'), ['controller' => 'SessionsLogins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sessions Login'), ['controller' => 'SessionsLogins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->id, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($user->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modify On') ?></th>
            <td><?= h($user->modify_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Current') ?></th>
            <td><?= h($user->date_current) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sessions Logins') ?></h4>
        <?php if (!empty($user->sessions_logins)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ip Address') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Modify On') ?></th>
                <th scope="col"><?= __('Date Current') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->sessions_logins as $sessionsLogins): ?>
            <tr>
                <td><?= h($sessionsLogins->id) ?></td>
                <td><?= h($sessionsLogins->ip_address) ?></td>
                <td><?= h($sessionsLogins->user_id) ?></td>
                <td><?= h($sessionsLogins->date) ?></td>
                <td><?= h($sessionsLogins->modify_on) ?></td>
                <td><?= h($sessionsLogins->date_current) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SessionsLogins', 'action' => 'view', $sessionsLogins->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SessionsLogins', 'action' => 'edit', $sessionsLogins->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SessionsLogins', 'action' => 'delete', $sessionsLogins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sessionsLogins->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
