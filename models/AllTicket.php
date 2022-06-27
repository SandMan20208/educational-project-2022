<?php  
namespace app\models;

use yii\db\ActiveRecord;

class AllTicket extends ActiveRecord
{
	public static function tableName()
	{
		return 'ticket_support';
	}

	public function attributeLabels()
	{
		return [
			'last_name'=>'Фамилия',
			'name'=>'Имя',
			'middle_name'=>'Отчество',
			'street'=>'Улица',
			'building'=>'Дом',
			'entrance'=>'Подъезд',
			'floor'=>'Этаж',
			'apartament'=>'Квартира',
			'contact_phone'=>'Телефон',
			'status' => 'Статус',
			'comment'=>'Комментарий',
			'date' => 'Дата/время',
		];
	}

	public function rules()
	{
		return[
				[['last_name', 'name', 'street','building','entrance','floor','apartament','contact_phone'] , 'required'],
				[['last_name', 'name', 'middle_name'], 'string', 'min' => 2 ],
				[['last_name', 'name', 'middle_name', 'street'], 'string', 'max' => 100 ],
				[['street'], 'string','min' => 2 ],
				[['contact_phone'], 'string', 'min'=> 5 ],
				[['contact_phone'], 'string', 'max'=> 11 ],
				[['comment'], 'string', 'max' => 120 ]	
			];	
	}
}