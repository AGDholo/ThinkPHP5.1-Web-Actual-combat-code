<?php

use think\migration\Migrator;

class Posts extends Migrator
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        // create the table
        $table = $this->table('posts');
        $table->addColumn('content', 'text')
            ->addColumn('user_id', 'integer')
            ->addTimestamps('created_at', 'updated_at')
            ->create();
    }
    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}
