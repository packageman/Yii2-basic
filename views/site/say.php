<?php

use yii\helpers\Html;

$this->title = 'hello';
$cookies = Yii::$app->request->cookies;
Yii::$app->language = $cookies->getValue('language');
?>
<h1><?= Html::encode($message) ?></h1>

<div class="btn-group">
  <button class="btn btn-primary" value="">
    Submit
  </button>
</div>


@yii: <?= Yii::getAlias('@yii'); ?><br/>
@app: <?= Yii::getAlias('@app'); ?><br/>
@webroot: <?= Yii::getAlias('@webroot'); ?><br/>
@web: <?= Yii::getAlias('@web'); ?><br/>
@runtime: <?= Yii::getAlias('@runtime'); ?><br/>

<br/>
