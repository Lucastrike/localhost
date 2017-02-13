<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movies".
 *
 * @property integer $id
 * @property string $picture
 * @property string $title
 * @property string $year
 * @property string $length
 * @property string $trailer
 * @property string $link
 * @property string $synopsis
 *
 * @property ListsMovies[] $listsMovies
 * @property Score[] $scores
 * @property Users[] $idUsers
 */
class Movies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['picture', 'title', 'year', 'length', 'trailer', 'link', 'synopsis'], 'required'],
            [['picture', 'link'], 'string', 'max' => 200],
            [['title'], 'string', 'max' => 50],
            [['year'], 'string', 'max' => 4],
            [['length'], 'string', 'max' => 10],
            [['trailer'], 'string', 'max' => 100],
            [['synopsis'], 'string', 'max' => 1000],
            [['title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'picture' => 'Picture',
            'title' => 'Title',
            'year' => 'Year',
            'length' => 'Length',
            'trailer' => 'Trailer',
            'link' => 'Link',
            'synopsis' => 'Synopsis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListsMovies()
    {
        return $this->hasMany(ListsMovies::className(), ['id_movies' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScores()
    {
        return $this->hasMany(Score::className(), ['id_movie' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsers()
    {
        return $this->hasMany(Users::className(), ['id' => 'id_user'])->viaTable('score', ['id_movie' => 'id']);
    }
}
