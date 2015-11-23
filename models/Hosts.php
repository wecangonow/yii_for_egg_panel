<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hosts".
 *
 * @property integer $id
 * @property string $url
 * @property string $md5
 * @property string $password
 * @property string $exe
 * @property string $parameter
 * @property integer $auth
 *
 * @property EggTasks[] $eggTasks
 * @property EggVersions[] $eggVersions
 * @property Schedule[] $schedules
 * @property Schedules[] $schedules0
 */
class Hosts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hosts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'md5', 'exe'], 'required'],
            [['auth'], 'integer'],
            [['url', 'md5', 'password', 'exe', 'parameter'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'md5' => 'Md5',
            'password' => 'Password',
            'exe' => 'Exe',
            'parameter' => 'Parameter',
            'auth' => 'Auth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEggTasks()
    {
        return $this->hasMany(EggTasks::className(), ['task_host_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEggVersions()
    {
        return $this->hasMany(EggVersions::className(), ['host_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['task_host_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules0()
    {
        return $this->hasMany(Schedules::className(), ['task_host_id' => 'id']);
    }
}
