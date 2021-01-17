<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%chucvu}}`.
 */
class m210117_032120_create_chucvu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%chucvu}}', [
            'macv' => $this->string(255)->notNull(),
            'tencv' => $this->string(255)->notNull(),
        ]);
        $this->addPrimaryKey('PK_chucvu', '{{%chucvu}}', 'macv');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%chucvu}}');
    }
}
