<?php

use Illuminate\Database\Seeder;
use App\Articles;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count =100;
        factory(Articles::class, $count)->create();
    }
}
