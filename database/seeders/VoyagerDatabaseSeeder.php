<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            // RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            // PermissionRoleTableSeeder::class,
            SettingsTableSeeder::class,
            // UsersTableSeeder::class,
            // UserRolesTableSeeder::class,
            // PostsTableSeeder::class,
            // PagesTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
        ]);
    }
}
