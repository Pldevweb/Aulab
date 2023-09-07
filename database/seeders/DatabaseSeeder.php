<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(CategorieSeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        // $this->call(ArticleSeeder::class);

        // $this->call(PartnerSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(DataTypesTableSeeder::class);
        // $this->call(DataRowsTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(PostsTableSeeder::class);
        // $this->call(PagesTableSeeder::class);
        // $this->call(MenusTableSeeder::class);
        // $this->call(MenuItemsTableSeeder::class);
        // $this->call(RolesTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(UserRolesTableSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
        // $this->call(PermissionRoleTableSeeder::class);
        // $this->call(SettingsTableSeeder::class);
        // $this->call(ArticlesTableSeeder::class);
        $this->call(ProductsCategoriesTableSeeder::class);
    }
}
