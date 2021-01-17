<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nhanvien}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%chucvu}}`
 * - `{{%trinhdohocvan}}`
 * - `{{%phongban}}`
 * - `{{%luong}}`
 */
class m210117_034000_create_nhanvien_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nhanvien}}', [
            'manv' => $this->string(255)->notNull(),
            'hoten' => $this->string(255)->notNull(),
            'gioitinh' => $this->string(255)->notNull(),
            'sodienthoai' => $this->integer(15)->notNull(),
            'quequan' => $this->string(255)->notNull(),
            'ngaysinh' => $this->date()->notNull(),
            'macv' => $this->string(255)->notNull(),
            'matdhv' => $this->string(255)->notNull(),
            'mapb' => $this->string(255)->notNull(),
            'bacluong' => $this->integer(11)->notNull(),
        ]);

        $this->addPrimaryKey('PK_nhanvien', '{{%nhanvien}}', 'manv');

        // creates index for column `macv`
        $this->createIndex(
            '{{%idx-nhanvien-macv}}',
            '{{%nhanvien}}',
            'macv'
        );

        // add foreign key for table `{{%chucvu}}`
        $this->addForeignKey(
            '{{%fk-nhanvien-macv}}',
            '{{%nhanvien}}',
            'macv',
            '{{%chucvu}}',
            'macv',
            'CASCADE'
        );

        // creates index for column `matdhv`
        $this->createIndex(
            '{{%idx-nhanvien-matdhv}}',
            '{{%nhanvien}}',
            'matdhv'
        );

        // add foreign key for table `{{%trinhdohocvan}}`
        $this->addForeignKey(
            '{{%fk-nhanvien-matdhv}}',
            '{{%nhanvien}}',
            'matdhv',
            '{{%trinhdohocvan}}',
            'matdhv',
            'CASCADE'
        );

        // creates index for column `mapb`
        $this->createIndex(
            '{{%idx-nhanvien-mapb}}',
            '{{%nhanvien}}',
            'mapb'
        );

        // add foreign key for table `{{%phongban}}`
        $this->addForeignKey(
            '{{%fk-nhanvien-mapb}}',
            '{{%nhanvien}}',
            'mapb',
            '{{%phongban}}',
            'mapb',
            'CASCADE'
        );

        // creates index for column `bacluong`
        $this->createIndex(
            '{{%idx-nhanvien-bacluong}}',
            '{{%nhanvien}}',
            'bacluong'
        );

        // add foreign key for table `{{%luong}}`
        $this->addForeignKey(
            '{{%fk-nhanvien-bacluong}}',
            '{{%nhanvien}}',
            'bacluong',
            '{{%luong}}',
            'bacluong',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%chucvu}}`
        $this->dropForeignKey(
            '{{%fk-nhanvien-macv}}',
            '{{%nhanvien}}'
        );

        // drops index for column `macv`
        $this->dropIndex(
            '{{%idx-nhanvien-macv}}',
            '{{%nhanvien}}'
        );

        // drops foreign key for table `{{%trinhdohocvan}}`
        $this->dropForeignKey(
            '{{%fk-nhanvien-matdhv}}',
            '{{%nhanvien}}'
        );

        // drops index for column `matdhv`
        $this->dropIndex(
            '{{%idx-nhanvien-matdhv}}',
            '{{%nhanvien}}'
        );

        // drops foreign key for table `{{%phongban}}`
        $this->dropForeignKey(
            '{{%fk-nhanvien-mapb}}',
            '{{%nhanvien}}'
        );

        // drops index for column `mapb`
        $this->dropIndex(
            '{{%idx-nhanvien-mapb}}',
            '{{%nhanvien}}'
        );

        // drops foreign key for table `{{%luong}}`
        $this->dropForeignKey(
            '{{%fk-nhanvien-bacluong}}',
            '{{%nhanvien}}'
        );

        // drops index for column `bacluong`
        $this->dropIndex(
            '{{%idx-nhanvien-bacluong}}',
            '{{%nhanvien}}'
        );

        $this->dropTable('{{%nhanvien}}');
    }
}
