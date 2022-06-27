<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string|null $text
 * @property string $image
 * @property int $sort
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tarif', 'option', 'price'], 'required'],
            [['tarif'], 'string', 'max' => 30],
            [['option'], 'string', 'max' => 100],
            [['price'], 'string', 'max' => 30],
            [['block'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tarif' => 'Название тарифа',
            'option' => 'Характеристики',
            'price' => 'Цена',
            'block' => 'Номер блока'
        ];
    }
}
