<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%luong}}".
 *
 * @property int $bacluong
 * @property int $luongcoban
 * @property int $hesoluong
 * @property int $hesophucap
 *
 * @property Nhanvien[] $nhanviens
 */
class Luong extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%luong}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['luongcoban', 'hesoluong', 'hesophucap'], 'required'],
            [['luongcoban', 'hesoluong', 'hesophucap'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bacluong' => 'Bacluong',
            'luongcoban' => 'Luongcoban',
            'hesoluong' => 'Hesoluong',
            'hesophucap' => 'Hesophucap',
        ];
    }

    /**
     * Gets query for [[Nhanviens]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NhanvienQuery
     */
    public function getNhanviens()
    {
        return $this->hasMany(Nhanvien::className(), ['bacluong' => 'bacluong']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\LuongQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\LuongQuery(get_called_class());
    }
}
