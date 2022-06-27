<?php  
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class OpLog extends ActiveRecord
{
	public static function tableName()
	{
		return 'autorization_support';
	}


public function rules()
{
	return [
		['username', 'required'],
		['password', 'required'],
	];
}
	
}
?>