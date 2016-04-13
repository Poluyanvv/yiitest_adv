<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $id_cat
 * @property string $title
 * @property string $description
 * @property integer $price
 * @property string $img_prod
 * @property integer $show_on_main
 *
 * @property Categories $idCat
 */
class Products extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cat', 'title'], 'required'],
            [['id_cat', 'price', 'show_on_main'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
            [['img_prod'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_cat' => 'Категория',
            'title' => 'Название',
            'description' => 'Описание',
            'price' => 'Цена',
            'img_prod' => 'Картинка',
            'show_on_main' => 'Показывать на главной',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['id' => 'id_cat']);
    }
}
