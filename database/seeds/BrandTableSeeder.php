<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Audi'],
            ['id' => 2, 'name' => 'BMW'],
            ['id' => 3, 'name' => 'Mercedes'],
            ['id' => 4, 'name' => 'Acura'],
            ['id' => 5, 'name' => 'Alfa Romeo'],
            ['id' => 6, 'name' => 'Chevrolet'],
            ['id' => 7, 'name' => 'Abarth'],
            ['id' => 8, 'name' => 'Honda']
        ];
        foreach($items as $item)
        {
        $brand = Brand::find($item['id']);
            if($brand)
            {
                $brand->update($item);
            } else 
                {
                    Brand::create($item);
                }
        }
    }
}
