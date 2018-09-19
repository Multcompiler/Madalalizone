<?php

use Illuminate\Database\Seeder;

class ItembuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\item_buy::class,50)->create();
    }
}
