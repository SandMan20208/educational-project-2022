<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autorization_support".
 *
 * @property int $id
 * @property string $FIO
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 * @property string $position
 *
 * @property StatisticSupport[] $statisticSupports
 * @property Statistics[] $statistics
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'autorization_support';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FIO', 'username', 'password', 'auth_key', 'access_token', 'position'], 'required'],
            [['FIO'], 'string', 'max' => 80],
            [['username'], 'string', 'max' => 15],
            [['password', 'auth_key', 'access_token'], 'string', 'max' => 32],
            [['position'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FIO' => 'Fio',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'position' => 'Position',
        ];
    }

    /**
     * Gets query for [[StatisticSupports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatisticSupports()
    {
        return $this->hasMany(StatisticSupport::className(), ['operator' => 'id']);
    }

    /**
     * Gets query for [[Statistics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatistics()
    {
        return $this->hasMany(Statistics::className(), ['id operator' => 'id']);
    }
}
