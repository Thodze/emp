<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%thoigiancongtac}}".
 *
 * @property int $id
 * @property string $manv
 * @property string $macv
 * @property string $ngaynhanchuc
 *
 * @property Chucvu $macv0
 * @property Nhanvien $manv0
 */
class Thoigiancongtac extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%thoigiancongtac}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manv', 'macv', 'ngaynhanchuc'], 'required'],
            [['ngaynhanchuc'], 'safe'],
            [['manv', 'macv'], 'string', 'max' => 255],
            [['macv'], 'exist', 'skipOnError' => true, 'targetClass' => Chucvu::className(), 'targetAttribute' => ['macv' => 'macv']],
            [['manv'], 'exist', 'skipOnError' => true, 'targetClass' => Nhanvien::className(), 'targetAttribute' => ['manv' => 'manv']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'manv' => 'Manv',
            'macv' => 'Macv',
            'ngaynhanchuc' => 'Ngaynhanchuc',
        ];
    }

    /**
     * Gets query for [[Macv0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ChucvuQuery
     */
    public function getMacv0()
    {
        return $this->hasOne(Chucvu::className(), ['macv' => 'macv']);
    }

    /**
     * Gets query for [[Manv0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NhanvienQuery
     */
    public function getManv0()
    {
        return $this->hasOne(Nhanvien::className(), ['manv' => 'manv']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ThoigiancongtacQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ThoigiancongtacQuery(get_called_class());
    }
}
