<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $created_at
 *
 * @property Note[] $notes
 * @property Review[] $reviews
 * @property UserBook[] $userBooks
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['username', 'email', 'password_hash'], 'required'],
            [['created_at'], 'safe'],
            [['username', 'email', 'password_hash'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id_user' => 'ID пользователя',
            'username' => 'Имя',
            'email' => 'Электронная почта',
            'password_hash' => 'Пароль',
            'created_at' => 'Дата регистрации',
        ];
    }

    // Поиск пользователя по ID
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    // Токены не используются
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    // Получение ID пользователя
    public function getId()
    {
        return $this->id;
    }

    // Ключ авторизации не используется
    public function getAuthKey()
    {
        return null;
    }

    public function validateAuthKey($authKey)
    {
        return false;
    }

    // Поиск пользователя по имени
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    // Проверка пароля
    public function validatePassword($password)
    {
        return
            $password ===
            $this->password_hash;
    }

    // Связь с заметками
    public function getNotes()
    {
        return $this->hasMany(Note::class, ['id' => 'id_user']);
    }

    // Связь с отзывами
    public function getReviews()
    {
        return $this->hasMany(Review::class, ['id' => 'id_user']);
    }

    // Связь с книгами пользователя
    public function getUserBooks()
    {
        return $this->hasMany(UserBook::class, ['id' => 'id_user']);
    }
}
