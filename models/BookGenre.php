<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book_genre".
 *
 * @property int $id_book_genre
 * @property int $id_book
 * @property int $id_genre
 *
 * @property Book $book
 * @property Genre $genre
 */
class BookGenre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_book', 'id_genre'], 'required'],
            [['id_book', 'id_genre'], 'integer'],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['id_book' => 'id_book']],
            [['id_genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['id_genre' => 'id_genre']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_book_genre' => 'Id Book Genre',
            'id_book' => 'Id Book',
            'id_genre' => 'Id Genre',
        ];
    }

    /**
     * Gets query for [[Book]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'id_book']);
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'id_genre']);
    }
}
