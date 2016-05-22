<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 5/22/16
 * Time: 17:24
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')?>
    <?= $form->field($model, 'email')?>
    <div class="form-group">
        <?= Html::submitButton('Submit',['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end() ?>