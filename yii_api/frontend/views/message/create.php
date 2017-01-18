<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Message */

$this->title = Yii::t('frontend', 'Create Message');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>