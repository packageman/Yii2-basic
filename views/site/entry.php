<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Rigister';
?>
<?php $form = ActiveForm::begin(['options' => ['class' => 'form-group'],]); ?>

    <?= $form->field($model, 'name')->textInput()->hint('Please enter your name')->label('User Name') ?>

    <?= $form->field($model, 'email')->input('email') ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <!-- allow multiple files to be uploaded: -->
    <?= $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>'multiple']); ?>

    <!-- allow multiple items to be checked: -->
    <?= $form->field($model, 'items[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>

    <div class="form-group">
        <div class="col-lg-offset-0">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>
