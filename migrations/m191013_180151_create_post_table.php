<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m191013_180151_create_post_table extends Migration
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
            'id_user' => $this->integer()->notNull(),
            'post_index' => $this->string()->notNull(),
            'country_code' => $this->string(2)->notNull(),
            'town' => $this->string()->notNull(),
            'street' => $this->string()->notNull(),
            'num_build' => $this->string()->notNull(),
            'num_office' => $this->string()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
