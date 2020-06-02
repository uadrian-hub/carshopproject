<?php

use Illuminate\Database\Seeder;

class ModelCarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'A6'],
            ['id' => 2, 'name' => 'A5'],
            ['id' => 3, 'name' => 'A4'],
            ['id' => 4, 'name' => 'A3'],
            ['id' => 5, 'name' => 'A2'],
            ['id' => 6, 'name' => 'A1'],
            ['id' => 7, 'name' => 'Q7'],
            ['id' => 8, 'name' => '7 Series'],
            ['id' => 9, 'name' => '6 Series'],
            ['id' => 10, 'name' => '5 Series'],
            ['id' => 11, 'name' => '4 Series'],
            ['id' => 12, 'name' => '3 Series'],
            ['id' => 13, 'name' => '2 Series'],
            ['id' => 14, 'name' => '1 Series'],
        ];
        foreach($items as $item)
        {
            $model = ModelCar::find($item['id']);
            if($model)
            {
                $model->update($item);
            } else 
                {
                    ModelCar::create($item);
                }
        }
    }
}
