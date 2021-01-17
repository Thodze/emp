<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trinhdohocvan}}`.
 */
class m210117_032627_create_trinhdohocvan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trinhdohocvan}}', [
            'matdhv' => $this->string(255)->notNull(),
            'tentrinhdo' => $this->string(255)->notNull(),
            'chuyennganh' => $this->string(255)->notNull(),
        ]);

        $this->addPrimaryKey('PK_trinhdohocvan', '{{%trinhdohocvan}}', 'matdhv');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%trinhdohocvan}}');
    }
}
