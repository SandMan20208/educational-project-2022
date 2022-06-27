<?php
namespace app\models;

use Yii;
use yii\base\Model;

class SearchModel extends Model
{
    public $search;

    public function attributeLabels()
    {
        return [
            'search' => 'Поиск'
        ];
    }

    public function rules()
    {
        return[
            [['search'], 'string', 'max' => 100]    
        ];
    }
}