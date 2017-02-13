<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lists_movies".
 *
 * @property integer $id
 * @property integer $id_lists
 * @property integer $id_movies
 * @property integer $id_users
 *
 * @property Lists $idLists
 * @property Movies $idMovies
 * @property Users $idUsers
 */
class ListsMovies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lists_movies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lists', 'id_movies', 'id_users'], 'required'],
            [['id_lists', 'id_movies', 'id_users'], 'integer'],
            [['id_lists'], 'exist', 'skipOnError' => true, 'targetClass' => Lists::className(), 'targetAttribute' => ['id_lists' => 'id']],
            [['id_movies'], 'exist', 'skipOnError' => true, 'targetClass' => Movies::className(), 'targetAttribute' => ['id_movies' => 'id']],
            [['id_users'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['id_users' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_lists' => 'Id Lists',
            'id_movies' => 'Id Movies',
            'id_users' => 'Id Users',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLists()
    {
        return $this->hasOne(Lists::className(), ['id' => 'id_lists']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMovies()
    {
        return $this->hasOne(Movies::className(), ['id' => 'id_movies']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'id_users']);
    }
}
