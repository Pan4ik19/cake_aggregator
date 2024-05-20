<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Wnikk\LaravelAccessRules\AccessRules;

class CreateRootAdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $acr = new AccessRules;
        $acr->newOwner('Role', 'root', 'RootAdmin role');

        $acr->addPermission('accessMiddleware.viewAny');
        $acr->addPermission('accessMiddleware.view');
        $acr->addPermission('accessMiddleware.store');
        $acr->addPermission('accessMiddleware.destroy');
        $acr->addPermission('accessMiddleware.view');
        $acr->addPermission('accessMiddleware.edit');

    }
}
