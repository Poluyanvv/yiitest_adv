<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            /**/
            [
                'attribute'=>'id_cat',
                'value' => function($products) {
                    return $products->categories->cat_title;
                }
            ],
            /**/
            /*'categories.cat_title',*/
            'title',
            //'description',
            //'price',
            // 'img_prod',
            // 'show_on_main',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
