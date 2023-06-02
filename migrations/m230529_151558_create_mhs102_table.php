<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs102}}`.
 */
class m230529_151558_create_mhs102_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs102}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string(100)->notNull(),
            'nama_mahasiswa' => $this->string(125)->notNull(),
            'kelas' => $this->string(100)->notNull(),
            'status' => $this->string(100)->notNull(), 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs102}}');
    }
}
