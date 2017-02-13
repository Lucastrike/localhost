<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lists".
 *
 * @property integer $id
 * @property string $type
 *
 * @property ListsMovies[] $listsMovies
 */
class Lists extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lists';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'string', 'max' => 20],
            [['type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListsMovies()
    {
        return $this->hasMany(ListsMovies::className(), ['id_lists' => 'id']);
    }
}
