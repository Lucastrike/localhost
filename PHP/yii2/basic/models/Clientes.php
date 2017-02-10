<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $cod_cliente
 * @property string $nombre
 * @property string $direccion
 * @property string $poblacion
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'direccion', 'poblacion'], 'required'],
            [['nombre', 'direccion'], 'string', 'max' => 50],
            [['poblacion'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cod_cliente' => 'Cod Cliente',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'poblacion' => 'Poblacion',
        ];
    }
}
