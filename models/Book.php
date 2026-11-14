<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property int $publication_year
 * @property string $description
 * @property string $cover_url
 * @property string|null $created_at
 *
 * @property BookGenre[] $bookGenres
 * @property Note[] $notes
 * @property Review[] $reviews
 * @property UserBook[] $userBooks
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'author', 'publication_year', 'description', 'cover_url'], 'required'],
            [['publication_year'], 'integer'],
            [['description'], 'string'],
            [['title', 'author', 'cover_url', 'created_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'publication_year' => 'Publication Year',
            'description' => 'Description',
            'cover_url' => 'Cover Url',
            'created_at' => 'Created At',
            'ozon' => 'Ozon',
            'Wb' => 'WB',
        ];
    }

    /**
     * Gets query for [[BookGenres]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookGenres()
    {
        return $this->hasMany(BookGenre::className(), ['id_book' => 'id']);
    }

    /**
     * Gets query for [[Notes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotes()
    {
        return $this->hasMany(Note::className(), ['id_book' => 'id']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['id_book' => 'id']);
    }

    /**
     * Gets query for [[UserBooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserBooks()
    {
        return $this->hasMany(UserBook::className(), ['id_book' => 'id']);
    }
}
