<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('vgen-seed', function () {
    $this->call('iseed', [
        'tables' => 'data_types,data_rows,categories,products,products_categories,articles,menus,menu_items,roles,users,user_roles,permissions,permission_role,settings',
        '--force' => true,
    ]);
})->describe('Syncs seeders for Voyager');
