<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat102}}`.
 */
class m230523_101032_create_obat102_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat102}}', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this->string()->notNull(),
            'harga' => $this->decimal()->notNull(),
            'stok_obat' => $this->integer()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat102}}');
    }
}
