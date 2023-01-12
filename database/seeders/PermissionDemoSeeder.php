<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionDemoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // reset cahced roles and permission
    app()[PermissionRegistrar::class]->forgetCachedPermissions();

    // create permissions
    Permission::create(['name' => 'view student']);
    Permission::create(['name' => 'create student']);

    Permission::create(['name' => 'view admin']);
    Permission::create(['name' => 'create admin']);
    Permission::create(['name' => 'edit admin']);
    Permission::create(['name' => 'delete admin']);
  }
}
