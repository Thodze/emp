<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%phongban}}".
 *
 * @property string $mapb
 * @property string $tenpb
 * @property string $diachi
 *
 * @property Nhanvien[] $nhanviens
 */
class Phongban extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%phongban}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mapb', 'tenpb', 'diachi'], 'required'],
            [['mapb', 'tenpb', 'diachi'], 'string', 'max' => 255],
            [['mapb'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mapb' => 'Mapb',
            'tenpb' => 'Tenpb',
            'diachi' => 'Diachi',
        ];
    }

    /**
     * Gets query for [[Nhanviens]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NhanvienQuery
     */
    public function getNhanviens()
    {
        return $this->hasMany(Nhanvien::className(), ['mapb' => 'mapb']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PhongbanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PhongbanQuery(get_called_class());
    }
}
