<?php

use yii\db\Migration;

/**
 * Handles the creation for table `users`.
 */
class m160728_091718_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(50)->notNull(),
            'username' => $this->string(50)->notNull(),
            'email' => $this->string(50)->notNull(),
            'password' => $this->string(50)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
