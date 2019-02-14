<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 14/02/2019
 * Time: 07:35
 */

use Illuminate\Hashing\BcryptHasher;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'test1@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test One',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test2@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Two',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test3@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Three',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test4@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Four',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test5@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Five',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test6@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Six',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test7@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Seven',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test8@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Eight',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test9@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Nine',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test10@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Ten',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test11@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Eleven',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test12@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Twelve',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test13@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Thirteen',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test14@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Fourteen',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::create([
            'username' => 'test15@example.org',
            'password' => (new BcryptHasher)->make('secret'),
            'name' => 'Test Fifteen',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
