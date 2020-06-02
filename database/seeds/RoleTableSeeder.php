<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'administrator'],
            ['id' => 2, 'name' => 'user'],
            ['id' => 3, 'name' => 'subscriber'],
            ['id' => 4, 'name' => 'CEO'],
            ['id' => 5, 'name' => 'Area Manager'],
            ['id' => 6, 'name' => 'Store Manager'],
            ['id' => 7, 'name' => 'Sales Team Manager'],
            ['id' => 8, 'name' => 'Team Leader Sales'],
            ['id' => 9, 'name' => 'Sales Memeber'],
            ['id' => 10, 'name' => 'IT Technician'],
            ['id' => 11, 'name' => 'Customer Service'],
            ['id' => 12, 'name' => 'Help Desk'],
            ['id' => 13, 'name' => 'Mechanic'],
            ['id' => 14, 'name' => 'Painter'],
            ['id' => 15, 'name' => 'Security Guard']
        ];
       foreach($items as $item)
       {
       $role = Role::find($item['id']);
            if($role)
            {
                $role->update($item);
            }   else
                {
                    Role::create($item);
                }  
       }
    }
}
