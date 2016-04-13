<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Categories;

/* @var $this yii\web\View */
/* @var $model common\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_parent_cat')->dropDownList(ArrayHelper::map(Categories::find()->all(), 'id','cat_title'),['prompt' => 'Выберите категорию']) ?>

    <?= $form->field($model, 'cat_descr')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_cat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
