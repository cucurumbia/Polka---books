<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $id_status
 * @property string $status
 *
 * @property UserBook[] $userBooks
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_status' => 'Id Status',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[UserBooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserBooks()
    {
        return $this->hasMany(UserBook::className(), ['id_status' => 'id_status']);
    }
}
