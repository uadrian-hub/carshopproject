<?php

use Illuminate\Database\Seeder;

class ConditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $items = [
            ['id' => 1, 'name' => 'Brand New'],
            ['id' => 2, 'name' => 'Second Hand']
        ];
        foreach($items as $item)
        {
            Condition::create($item);
        }
    }
}
