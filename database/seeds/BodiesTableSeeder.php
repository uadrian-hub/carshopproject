<?php

use Illuminate\Database\Seeder;

class BodiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Hatchback'],
            ['id' => 2, 'name' => 'SUV'],
            ['id' => 3, 'name' => 'Sedan'],
            ['id' => 4, 'name' => 'Crossover']
        ];
        foreach($items as $item)
        {
            $bodies = Body::find($item['id']);
            if($bodies)
            {
                $bodies->update($item);
            } else 
                {
                    Body::create($item);
                }
        }
    }
}
