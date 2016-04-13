<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $cat_title
 * @property integer $id_parent_cat
 * @property string $cat_descr
 * @property string $img_cat
 */
class Categories extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_title'], 'required'],
            [['id_parent_cat'], 'integer'],
            [['cat_title', 'cat_descr'], 'string', 'max' => 255],
            [['img_cat'], 'string', 'max' => 250],
            [['cat_title'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_title' => 'Категория',
            'id_parent_cat' => 'Родительская категория',
            'cat_descr' => 'Описание',
            'img_cat' => 'Картинка',
        ];
    }
}
