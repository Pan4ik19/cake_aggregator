<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Wnikk\LaravelAccessRules\AccessRules;

class CreateRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name ='accessMiddleware';

        AccessRules::newRule($name.'.view');
        AccessRules::newRule($name.'.viewAny');
        AccessRules::newRule($name.'.store');
        AccessRules::newRule($name.'.destroy');
        AccessRules::newRule($name.'.edit');

//        AccessRules::newRule('');
    }
}
