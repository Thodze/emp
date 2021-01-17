<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Thoigiancongtac]].
 *
 * @see \common\models\Thoigiancongtac
 */
class ThoigiancongtacQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Thoigiancongtac[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Thoigiancongtac|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
