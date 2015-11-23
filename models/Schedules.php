<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedules".
 *
 * @property integer $taskid
 * @property integer $task_host_id
 * @property integer $timeout
 * @property integer $is_active
 * @property string $triggers
 *
 * @property Hosts $taskHost
 */
class Schedules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_host_id', 'timeout', 'is_active'], 'integer'],
            [['is_active', 'triggers','task_host_id'], 'required'],
            [['triggers'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'taskid' => 'Taskid',
            'task_host_id' => '宿主文件',
            'timeout' => 'Timeout',
            'is_active' => '是否启用',
            'triggers' => '触发条件',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaskHost()
    {
        return $this->hasOne(Hosts::className(), ['id' => 'task_host_id']);
    }
}
