<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 *
 * @property ListsMovies[] $listsMovies
 * @property Score[] $scores
 * @property Movies[] $idMovies
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['name'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 200],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListsMovies()
    {
        return $this->hasMany(ListsMovies::className(), ['id_users' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScores()
    {
        return $this->hasMany(Score::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMovies()
    {
        return $this->hasMany(Movies::className(), ['id' => 'id_movie'])->viaTable('score', ['id_user' => 'id']);
    }
}
