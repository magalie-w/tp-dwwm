<?php


use Phinx\Seed\AbstractSeed;

class BookSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Livre 01',
                'priceHT' => 45,
                'isbn' => '15151',
                'autor' => 'Gisele',
                'date' => date('2022-05-15'),
                'img' => '01.jpg',
            ],

            [
                'name' => 'Livre 02',
                'priceHT' => 50,
                'isbn' => '15461',
                'autor' => 'Mary',
                'date' => date('2022-08-25'),
                'img' => '02.jpg',
            ],

            [
                'name' => 'Livre 03',
                'priceHT' => 100,
                'isbn' => '11781',
                'autor' => 'Camille',
                'date' => date('2021-01-05'),
                'img' => '03.jpg',
            ],

            [
                'name' => 'Livre 04',
                'priceHT' => 150,
                'isbn' => '1761',
                'autor' => 'Luck',
                'date' => date('2021-09-20'),
                'img' => '04.jpg',
            ],

            [
                'name' => 'Livre 05',
                'priceHT' => 40,
                'isbn' => '1478',
                'autor' => 'Marc',
                'date' => date('2021-07-20'),
                'img' => '05.jpg',
            ],

            [
                'name' => 'Livre 06',
                'priceHT' => 20,
                'isbn' => '15451',
                'autor' => 'Laury',
                'date' => date('2020-05-20'),
                'img' => '06.jpg',
            ]
        ];

        $book = $this->table('books');
        $book->insert($data)
              ->saveData();
    }
}
