<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
?>

<h1>Users</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?= Html::encode("{$user->full_name}") ?></td>
            <td><?= Html::encode("{$user->username}") ?></td>
            <td><?= Html::encode("{$user->email}") ?></td>
            <td><?= Html::encode("{$user->password}") ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>