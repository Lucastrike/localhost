<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articulos".
 *
 * @property integer $cod_articulo
 * @property string $articulo
 * @property string $precio
 * @property integer $stock
 * @property integer $cod_categoria
 *
 * @property Categoria $codCategoria
 */
class Articulos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articulos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articulo', 'precio', 'stock', 'cod_categoria'], 'required'],
            [['precio'], 'number'],
            [['stock', 'cod_categoria'], 'integer'],
            [['articulo'], 'string', 'max' => 50],
            [['cod_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['cod_categoria' => 'cod_categoria']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cod_articulo' => 'Cod Articulo',
            'articulo' => 'Articulo',
            'precio' => 'Precio',
            'stock' => 'Stock',
            'cod_categoria' => 'Cod Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodCategoria()
    {
        return $this->hasOne(Categoria::className(), ['cod_categoria' => 'cod_categoria']);
    }
}
