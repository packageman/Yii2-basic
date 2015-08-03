<?php

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use app\models\EntryForm;
use yii\data\ActiveDataProvider;

class HelloController extends ActiveController
{
    // 设置视图所应用的布局文件，默认在app/views/layouts/文件夹下
    // public $layout = 'post';

    public $modelClass = 'app\models\EntryForm';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actions()
    {
        $actions = parent::actions();

        // 注销系统自带的实现方法
        unset($actions['index'], $actions['update'], $actions['create'], $actions['delete'], $actions['view']);
        return $actions;
    }

    public function actionIndex()
    {
        $modelClass = $this->modelClass;

        $query = $modelClass::find(); // equivalent to $query = EntryForm::find()

        return new ActiveDataProvider(['query' => $query]);

    }

    public function actionCreate()
    {
        $model = new EntryForm;
        $model->attributes = Yii::$app->request->post();

        if (!$model->save()) {
            return array_values($model->getFirstErrors())[0];
        }

        return $model;
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        if ($model === null) {
            throw new NotFoundHttpException('Can not find this object!');
        } else {
            return $model;
        }
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        // Delete in physical
        // $model->delete();

        // Delete in logical
        $model->isDeleted = true;
        $model->save();

        return $model;
    }

    private function findModel($id)
    {
        //transfer the id from string to MongoId
        $id = new \MongoId($id);

        return EntryForm::findOne(['_id' => $id]);
    }
}
