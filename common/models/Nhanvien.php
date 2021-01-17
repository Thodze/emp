<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%nhanvien}}".
 *
 * @property string $manv
 * @property string $hoten
 * @property string $gioitinh
 * @property int $sodienthoai
 * @property string $quequan
 * @property string $ngaysinh
 * @property string $macv
 * @property string $matdhv
 * @property string $mapb
 * @property int $bacluong
 *
 * @property Luong $bacluong0
 * @property Chucvu $macv0
 * @property Phongban $mapb0
 * @property Trinhdohocvan $matdhv0
 * @property Thoigiancongtac[] $thoigiancongtacs
 */
class Nhanvien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nhanvien}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manv', 'hoten', 'gioitinh', 'sodienthoai', 'quequan', 'ngaysinh', 'macv', 'matdhv', 'mapb', 'bacluong'], 'required'],
            [['sodienthoai', 'bacluong'], 'integer'],
            [['ngaysinh'], 'safe'],
            [['manv', 'hoten', 'gioitinh', 'quequan', 'macv', 'matdhv', 'mapb'], 'string', 'max' => 255],
            [['manv'], 'unique'],
            [['bacluong'], 'exist', 'skipOnError' => true, 'targetClass' => Luong::className(), 'targetAttribute' => ['bacluong' => 'bacluong']],
            [['macv'], 'exist', 'skipOnError' => true, 'targetClass' => Chucvu::className(), 'targetAttribute' => ['macv' => 'macv']],
            [['mapb'], 'exist', 'skipOnError' => true, 'targetClass' => Phongban::className(), 'targetAttribute' => ['mapb' => 'mapb']],
            [['matdhv'], 'exist', 'skipOnError' => true, 'targetClass' => Trinhdohocvan::className(), 'targetAttribute' => ['matdhv' => 'matdhv']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'manv' => 'Manv',
            'hoten' => 'Hoten',
            'gioitinh' => 'Gioitinh',
            'sodienthoai' => 'Sodienthoai',
            'quequan' => 'Quequan',
            'ngaysinh' => 'Ngaysinh',
            'macv' => 'Macv',
            'matdhv' => 'Matdhv',
            'mapb' => 'Mapb',
            'bacluong' => 'Bacluong',
        ];
    }

    /**
     * Gets query for [[Bacluong0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\LuongQuery
     */
    public function getBacluong0()
    {
        return $this->hasOne(Luong::className(), ['bacluong' => 'bacluong']);
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
     * Gets query for [[Mapb0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\PhongbanQuery
     */
    public function getMapb0()
    {
        return $this->hasOne(Phongban::className(), ['mapb' => 'mapb']);
    }

    /**
     * Gets query for [[Matdhv0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TrinhdohocvanQuery
     */
    public function getMatdhv0()
    {
        return $this->hasOne(Trinhdohocvan::className(), ['matdhv' => 'matdhv']);
    }

    /**
     * Gets query for [[Thoigiancongtacs]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ThoigiancongtacQuery
     */
    public function getThoigiancongtacs()
    {
        return $this->hasMany(Thoigiancongtac::className(), ['manv' => 'manv']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NhanvienQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NhanvienQuery(get_called_class());
    }
}
