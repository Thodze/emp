<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%luong}}`.
 */
class m210117_033150_create_luong_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%luong}}', [
            'bacluong' => $this->primaryKey(),
            'luongcoban' => $this->tinyInteger()->notNull(),
            'hesoluong' => $this->tinyInteger()->notNull(),
            'hesophucap' => $this->tinyInteger()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%luong}}');
    }
}
