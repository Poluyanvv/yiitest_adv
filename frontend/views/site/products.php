<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 07.04.2016
 * Time: 20:06
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    var_dump($products);
    ?>

    <?= LinkPager::widget(['pagination' => $pagination])?>

</div>