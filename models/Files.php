<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property integer $id
 * @property string $url
 * @property string $md5
 * @property integer $zip
 * @property string $password
 * @property string $exe
 * @property string $parameter
 * @property integer $auth
 *
 * @property EggTasks[] $eggTasks
 * @property EggVersions[] $eggVersions
 * @property NamedFile[] $namedFiles
 * @property Schedules[] $schedules
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'md5', 'exe'], 'required'],
            [['zip', 'auth'], 'integer'],
            [['url', 'exe', 'parameter'], 'string', 'max' => 255],
            [['md5', 'password'], 'string', 'max' => 32]
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
            'zip' => 'Zip',
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
        return $this->hasMany(EggTasks::className(), ['task_file_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEggVersions()
    {
        return $this->hasMany(EggVersions::className(), ['file_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamedFiles()
    {
        return $this->hasMany(NamedFile::className(), ['file_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedules::className(), ['task_file_id' => 'id']);
    }
}
