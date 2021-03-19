<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Dingqi 12 volt Lithium Ion Cordless Drill 105001',
                'price'=>'3000',
                'category'=>'Drill Machine',
                'description'=>'Rated Voltage : 220V , 50/60 Hz, Rated Input Power : 550 watt, Velocity : 0-1350 r/ min, on / off switch,
                Forward and Reverse using method, With or Without Hammer, Double battery, 3 Functions',
                'image'=>'Dingqi 12 volt Lithium Ion Cordless Drill 105001'
            ],
            [
                'name'=>'Dingqi 12 volt Lithium Ion Cordless Drill 105001',
                'price'=>'3000',
                'category'=>'Drill Machine',
                'description'=>'Rated Voltage : 220V , 50/60 Hz, Rated Input Power : 550 watt, Velocity : 0-1350 r/ min, on / off switch,
                Forward and Reverse using method, With or Without Hammer, Double battery, 3 Functions',
                'image'=>'Dingqi 12 volt Lithium Ion Cordless Drill 105001'
            ],
            [
                'name'=>'Dingqi 12 volt Lithium Ion Cordless Drill 105001',
                'price'=>'3000',
                'category'=>'Drill Machine',
                'description'=>'Rated Voltage : 220V , 50/60 Hz, Rated Input Power : 550 watt, Velocity : 0-1350 r/ min, on / off switch,
                Forward and Reverse using method, With or Without Hammer, Double battery, 3 Functions',
                'image'=>'Dingqi 12 volt Lithium Ion Cordless Drill 105001'
            ],
            [
                'name'=>'Dingqi 12 volt Lithium Ion Cordless Drill 105001',
                'price'=>'3000',
                'category'=>'Drill Machine',
                'description'=>'Rated Voltage : 220V , 50/60 Hz, Rated Input Power : 550 watt, Velocity : 0-1350 r/ min, on / off switch,
                Forward and Reverse using method, With or Without Hammer, Double battery, 3 Functions',
                'image'=>'Dingqi 12 volt Lithium Ion Cordless Drill 105001'
            ]
        ]);
    }
}
