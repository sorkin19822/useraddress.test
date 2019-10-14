<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m191013_190551_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'id_user' => $this->integer(),
            'post_index' => $this->string()->notNull(),
            'country_code' => $this->string(2)->notNull(),
            'town' => $this->string()->notNull(),
            'street' => $this->string()->notNull(),
            'num_build' => $this->string()->notNull(),
            'num_office' => $this->string()
        ], $tableOptions);

        $this->alterColumn('post', 'id', $this->integer(12).' NOT NULL AUTO_INCREMENT');

        $this->addForeignKey(
            'post_to_user',
            'post',
            'id_user',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');

    }
}
