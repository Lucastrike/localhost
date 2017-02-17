<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lists".
 *
 * @property integer $id
 * @property string $type
 *
 * @property Listsmovies[] $listsmovies
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
    public function getListsmovies()
    {
        return $this->hasMany(Listsmovies::className(), ['id_lists' => 'id']);
    }
}
