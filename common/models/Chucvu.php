<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%chucvu}}".
 *
 * @property string $macv
 * @property string $tencv
 *
 * @property Nhanvien[] $nhanviens
 * @property Thoigiancongtac[] $thoigiancongtacs
 */
class Chucvu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%chucvu}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['macv', 'tencv'], 'required'],
            [['macv', 'tencv'], 'string', 'max' => 255],
            [['macv'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'macv' => 'Macv',
            'tencv' => 'Tencv',
        ];
    }

    /**
     * Gets query for [[Nhanviens]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NhanvienQuery
     */
    public function getNhanviens()
    {
        return $this->hasMany(Nhanvien::className(), ['macv' => 'macv']);
    }

    /**
     * Gets query for [[Thoigiancongtacs]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ThoigiancongtacQuery
     */
    public function getThoigiancongtacs()
    {
        return $this->hasMany(Thoigiancongtac::className(), ['macv' => 'macv']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ChucvuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ChucvuQuery(get_called_class());
    }
}
