<?php  
namespace app\models;

use yii\db\ActiveRecord;

class AllUsers extends ActiveRecord
{
	public static function tableName()
	{
		return 'autorization_support';
	}

	public function attributeLabels()
	{
		return [
		    'last_name' => 'Фамилия',
    	    'name' => 'Имя',
    	    'middle_name' => 'Отчество',
    	    'username' => 'Логин',
    	    'position' => 'Должность',
            'password' => 'Пароль'
        ];
	}

	public function rules()
	{
		return[
				[['last_name','name','middle_name','username','password','position'], 'required'],
				[['last_name', 'name','middle_name'], 'string', 'min' => 2, 'max' => 30],
				[['username'], 'string','min' => 8, 'max' => 15 ],
				[['password'], 'string', 'min' => 8, 'max' => 32],
			];	
	}
}