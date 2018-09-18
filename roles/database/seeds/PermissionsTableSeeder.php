<?php

use Illuminate\Database\Seeder;

// La ruta sigue el patrón proveedor/paquete/carpeta/entidad, nos lleva a un modelo
// de la librería Shinobi que encontramos en la carpeta vendor.
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
        //=============Permisos para los usuarios=====================================
        // En el caso de los usuarios no tenemos el Permiso de crear, puesto que cada usuario se registra.
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Eliminar cualquier usuario del sistema',
        ]);

        //=========================Roles============================================
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de rol',
            'slug' => 'roles.show',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name' => 'Creación de roles',
            'slug' => 'roles.create',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Editar cualquier dato de un roles del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Eliminar cualquier rol del sistema',
        ]);

        //=========================Productos============================================
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de producto',
            'slug' => 'products.show',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Ver en detalle cada producto del sistema',
        ]);

        Permission::create([
            'name' => 'Creación de productos',
            'slug' => 'products.create',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Editar cualquier dato de un producto del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de productos',
            'slug' => 'products.edit',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Editar cualquier dato de un producto del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar producto',
            'slug' => 'products.destroy',/* Estamos definiendo un permiso sobre una ruta que esta en web.php */
            'description' => 'Eliminar cualquier producto del sistema',
        ]);
    }
}
