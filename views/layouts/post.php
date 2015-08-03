<?php
use yii\helpers\Html;
use yii\web\View;
use Yii;
use yii\web\Cookie;
use app\assets\AppAsset;

AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $content string 字符串 */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <header>My Yii FrameWork!</header>
    <?= $content ?>
    <footer>&copy; 2015 by Byron Zhang</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
