<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UserMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('books')
            ->addColumn('name', 'string')
            ->addColumn('priceHT', 'integer')
            ->addColumn('isbn', 'string')
            ->addColumn('autor', 'string')
            ->addColumn('date', 'date')
            ->addColumn('img', 'string')
            ->create();
    }
}
