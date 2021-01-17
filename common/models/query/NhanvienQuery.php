<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Nhanvien]].
 *
 * @see \common\models\Nhanvien
 */
class NhanvienQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Nhanvien[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Nhanvien|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
