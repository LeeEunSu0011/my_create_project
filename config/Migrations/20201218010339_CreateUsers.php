<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table
            ->addColumn('userid', 'string',['default' => null, 'limit' => 50, 'null' => null])
            ->addColumn('userpassword', 'string')
            ->addColumn('username', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime');
        $table->create();
    }
}
