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
            <th><th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?= Html::encode("{$user->full_name}") ?></td>
            <td><?= Html::encode("{$user->username}") ?></td>
            <td><?= Html::encode("{$user->email}") ?></td>
            <td><?= Html::encode("{$user->password}") ?></td>
            <td>
                <div class="btn-group">
                    <?= Html::a('Edit', ['/users/edit'], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= Html::a('Delete', ['/users/delete'], ['class'=>'btn btn-danger btn-xs']) ?>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>