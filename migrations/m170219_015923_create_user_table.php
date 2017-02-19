<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170219_015923_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique()->notNull(),
            'password' => $this->string()->notNull(),
            'salt' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
