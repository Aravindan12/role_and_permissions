<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /**
         * Creating permission and give permission to admin.
         */
        $permissions = [
            'add-product',
            'insert-product',
            'product-list',
            'product-delete',
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
              $admin = Role::find(1);
              $admin->givePermissionTo($permission);
         }
    }
}
