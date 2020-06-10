<?php

use Illuminate\Database\Seeder;
use App\Office;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create([
            'name'=>'ÁREA DE PERSONAL',
            'description'=>'ÁREA DE PERSONAL',
            'status'=>'ACTIVO'
        ]);
    }
}
