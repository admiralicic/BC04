<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\UserForm;
use app\models\Users;

class UsersController extends Controller
{
     public function actionIndex()
    {
        $query = Users::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $users = $query->orderBy('full_name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'users' => $users,
            'pagination' => $pagination
        ]);
    }

    public function actionCreate()
    {
        $model = new UserForm();

        if($model->load(Yii::$app->request->post()) && $model->validate()){

            $newUser = new Users();
            $newUser->full_name = $model->full_name;
            $newUser->username = $model->username;
            $newUser->email = $model->email;
            $newUser->password = $model->password;
            $newUser->save();

            return $this->redirect(array('users/index'));
        }else{
            return $this->render('newUser', ['model'=>$model]);
        }
    }

    public function actionEdit()
    {
        return $this->render('editUser');
    }
}