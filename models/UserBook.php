<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_book".
 *
 * @property int $id_user_book
 * @property int $id_user
 * @property int $id_book
 * @property int $id_status
 * @property string $added_at
 *
 * @property Book $book
 * @property Status $status
 * @property User $user
 */
class UserBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_book', 'id_status', 'added_at'], 'required'],
            [['id_user', 'id_book', 'id_status'], 'integer'],
            [['added_at'], 'safe'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id_user']],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['id_book' => 'id_book']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['id_status' => 'id_status']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user_book' => 'Id User Book',
            'id_user' => 'Id User',
            'id_book' => 'Id Book',
            'id_status' => 'Id Status',
            'added_at' => 'Added At',
        ];
    }

    /**
     * Gets query for [[Book]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['id_book' => 'id_book']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id_status' => 'id_status']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id_user' => 'id_user']);
    }
}
