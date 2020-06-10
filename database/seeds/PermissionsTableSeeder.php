<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([

            'name' => 'Navegar usuarios',
            'slug'=> 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de usuarios',
            'slug'=> 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de usuarios',
            'slug'=> 'users.create',
            'description' => 'Crear un usuario del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de usuarios',
            'slug'=> 'users.edit',
            'description' => 'Edita cualquier dato de un usuario del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar usuarios',
            'slug'=> 'users.destroy',
            'description' => 'Elimina cualquier usuario del sistema',
        
        ]);

        //Roles
        Permission::create([

            'name' => 'Navegar roles',
            'slug'=> 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de rol',
            'slug'=> 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de rol',
            'slug'=> 'roles.create',
            'description' => 'Crear un rol del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de roles',
            'slug'=> 'roles.edit',
            'description' => 'Edita cualquier dato de un usuario del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar rol',
            'slug'=> 'roles.destroy',
            'description' => 'Elimina cualquier rol del sistema',
        
        ]);

        //Oficina
        Permission::create([

            'name' => 'Navegar oficina',
            'slug'=> 'offices.index',
            'description' => 'Lista y navega todos los niveles del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de oficina',
            'slug'=> 'offices.show',
            'description' => 'Ver en detalle cada oficina del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de oficina',
            'slug'=> 'offices.create',
            'description' => 'Crear un oficina del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de oficina',
            'slug'=> 'offices.edit',
            'description' => 'Edita cualquier oficina del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar oficina',
            'slug'=> 'offices.destroy',
            'description' => 'Elimina cualquier oficina del sistema',
        
        ]);

    }
}
