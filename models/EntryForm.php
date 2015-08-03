<?php

namespace app\models;

use yii\mongodb\ActiveRecord;

class EntryForm extends ActiveRecord
{
    const DELETED = true;
    const NOT_DELETED = false;

    public static function collectionName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            ['name', 'required', 'message' => 'Username is required!', 'when' => function($model) {
                return $model->email == '';
            }, 'whenClient' => "function (attribute, value) {
                return $('#entryform-email').val() == '';
            }"],
            [['email', 'password'], 'required'],
            ['email', 'email'],
        ];
    }

    public function attributes()
    {
        return ['_id', 'name', 'email', 'uploadFile', 'items', 'password', 'createdAt', 'updatedAt', 'isDeleted'];
    }

    public function safeAttributes()
    {
        return ['name', 'email', 'password', 'createdAt', 'updatedAt', 'isDeleted'];
    }

    public function insert($runValidation = true, $attributeNames = null)
    {
        $this->createdAt = $this->updatedAt = new \MongoDate();
        $this->isDeleted = self::NOT_DELETED;
        return parent::insert($runValidation, $attributeNames);
    }
}
