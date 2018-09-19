<?php

use Illuminate\Database\Seeder;

class ItemsellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\item_sell::class,50)->create();
    }
}
