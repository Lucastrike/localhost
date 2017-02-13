<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "score".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_movie
 * @property string $score
 *
 * @property Users $idUser
 * @property Movies $idMovie
 */
class Score extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'score';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_movie', 'score'], 'required'],
            [['id_user', 'id_movie'], 'integer'],
            [['score'], 'number'],
            [['id_user', 'id_movie'], 'unique', 'targetAttribute' => ['id_user', 'id_movie'], 'message' => 'The combination of Id User and Id Movie has already been taken.'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_movie'], 'exist', 'skipOnError' => true, 'targetClass' => Movies::className(), 'targetAttribute' => ['id_movie' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_movie' => 'Id Movie',
            'score' => 'Score',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMovie()
    {
        return $this->hasOne(Movies::className(), ['id' => 'id_movie']);
    }
}
