<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shift */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shift-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supervisor')->dropDownList(\common\models\User::find()->select(['username', 'id'])->indexBy('id')->orderBy('username')->where('supervisor')->column(), ['prompt'=>'Select supervisor']) ?>

    <?= $form->field($model, 'date')->widget(\kartik\date\DatePicker::classname(), [
        'options' => ['placeholder' => 'Shift day'],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'assigned_to')->dropDownList(\common\models\User::find()->select(['username', 'id'])->indexBy('id')->orderBy('username')->where(['supervisor' => 0])->column(), ['prompt' => 'Not assigned yet']) ?>

    <?= $form->field($model, 'status')->dropDownList([0=>"Invitation",1=>"Pending",2=>"Accepted"]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>