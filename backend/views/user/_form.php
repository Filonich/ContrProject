<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'role')->textInput() ?>


<!-- Section Select widget by Kartik-->

<?= $form->field($model, 'section')->widget(\kartik\select2\Select2::className(),[
        'data'=>\yii\helpers\ArrayHelper::map(\common\models\Section::getActiveSectionArray(), 'id', 'name'),
    'options'=> ['placeholder'=>'Select Sections ...',
    'multiple'=>true,
    ],
    'pluginOptions'=>['tags'=>true,
    'allowClear'=>true],
]);  ?>


    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
