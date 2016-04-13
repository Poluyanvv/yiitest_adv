<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 07.04.2016
 * Time: 17:36
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    var_dump($categories);
    ?>

    <?= LinkPager::widget(['pagination' => $pagination])?>

</div>
