<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Test first_name',
            'second_name' => 'Test second_name',
            'email' => 'root@mail.com',
            'phone' => '9939968571',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'first_name' => 'Test first_name 2',
            'second_name' => 'Test second_name 2',
            'email' => 'test@mail.com',
            'phone' => '9939968572',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'first_name' => 'Test first_name 3',
            'second_name' => 'Test second_name 3',
            'email' => Str::random(10).'@mail.com',
            'phone' => '9939968573',
            'password' => Hash::make(Str::random(10)),
        ]);
        User::create([
            'first_name' => 'Test first_name 4',
            'second_name' => 'Test second_name 4',
            'email' => Str::random(10).'@mail.com',
            'phone' => '9939968574',
            'password' => Hash::make(Str::random(10)),
        ]);
        User::create([
            'first_name' => 'Test first_name 5',
            'second_name' => 'Test second_name 5',
            'email' => Str::random(10).'@mail.com',
            'phone' => '9939968575',
            'password' => Hash::make(Str::random(10)),
        ]);
    }
}
