<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%trinhdohocvan}}".
 *
 * @property string $matdhv
 * @property string $tentrinhdo
 * @property string $chuyennganh
 *
 * @property Nhanvien[] $nhanviens
 */
class Trinhdohocvan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%trinhdohocvan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matdhv', 'tentrinhdo', 'chuyennganh'], 'required'],
            [['matdhv', 'tentrinhdo', 'chuyennganh'], 'string', 'max' => 255],
            [['matdhv'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'matdhv' => 'Matdhv',
            'tentrinhdo' => 'Tentrinhdo',
            'chuyennganh' => 'Chuyennganh',
        ];
    }

    /**
     * Gets query for [[Nhanviens]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NhanvienQuery
     */
    public function getNhanviens()
    {
        return $this->hasMany(Nhanvien::className(), ['matdhv' => 'matdhv']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TrinhdohocvanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TrinhdohocvanQuery(get_called_class());
    }
}
