<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Chucvu]].
 *
 * @see \common\models\Chucvu
 */
class ChucvuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Chucvu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Chucvu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
