<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phongban}}`.
 */
class m210117_032815_create_phongban_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%phongban}}', [
            'mapb' => $this->string(255)->notNull(),
            'tenpb' => $this->string(255)->notNull(),
            'diachi' => $this->string(255)->notNull(),
        ]);

        $this->addPrimaryKey('PK_phongban', '{{%phongban}}', 'mapb');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phongban}}');
    }
}
