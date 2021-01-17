<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%thoigiancongtac}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%nhanvien}}`
 * - `{{%chucvu}}`
 */
class m210117_034502_create_thoigiancongtac_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%thoigiancongtac}}', [
            'id' => $this->primaryKey(),
            'manv' => $this->string(255)->notNull(),
            'macv' => $this->string(255)->notNull(),
            'ngaynhanchuc' => $this->date()->notNull(),
        ]);

        // creates index for column `manv`
        $this->createIndex(
            '{{%idx-thoigiancongtac-manv}}',
            '{{%thoigiancongtac}}',
            'manv'
        );

        // add foreign key for table `{{%nhanvien}}`
        $this->addForeignKey(
            '{{%fk-thoigiancongtac-manv}}',
            '{{%thoigiancongtac}}',
            'manv',
            '{{%nhanvien}}',
            'manv',
            'CASCADE'
        );

        // creates index for column `macv`
        $this->createIndex(
            '{{%idx-thoigiancongtac-macv}}',
            '{{%thoigiancongtac}}',
            'macv'
        );

        // add foreign key for table `{{%chucvu}}`
        $this->addForeignKey(
            '{{%fk-thoigiancongtac-macv}}',
            '{{%thoigiancongtac}}',
            'macv',
            '{{%chucvu}}',
            'macv',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%nhanvien}}`
        $this->dropForeignKey(
            '{{%fk-thoigiancongtac-manv}}',
            '{{%thoigiancongtac}}'
        );

        // drops index for column `manv`
        $this->dropIndex(
            '{{%idx-thoigiancongtac-manv}}',
            '{{%thoigiancongtac}}'
        );

        // drops foreign key for table `{{%chucvu}}`
        $this->dropForeignKey(
            '{{%fk-thoigiancongtac-macv}}',
            '{{%thoigiancongtac}}'
        );

        // drops index for column `macv`
        $this->dropIndex(
            '{{%idx-thoigiancongtac-macv}}',
            '{{%thoigiancongtac}}'
        );

        $this->dropTable('{{%thoigiancongtac}}');
    }
}
