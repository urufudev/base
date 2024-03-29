<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'office_id'=>'1',
            'laboral_id'=>'1',
            'name'=>'Administrador',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('123'),
            'dni'=>'12345678',
            'ap_paterno'=>'DRE',
            'ap_materno'=>'AYACUCHO',
            'gender'=>'MASCULINO',
            'f_birth'=>'2020-05-19',
            'phone'=>'966999999',
            'position'=>'ADMINISTRADOR',
            'status'=>'ACTIVO',


        ]);

        Role::create([
            'name'=>'ADMINISTRADOR',
            'slug'=>'admin',
            'special'=>'all-access'
        ]);

        User::first()->assignRoles('admin');
    }
}
