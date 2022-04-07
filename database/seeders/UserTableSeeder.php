<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'      => 'admin',
            'nip'       => '2113171036',
            'email'     => 'admin@admin.com',
            'status'    => '1',
            'password'  => bcrypt('admin'),
        ]);

        $user->assignRole('super-admin');

        $user = User::create([
            'name'      => 'operator',
            'nip'       => '1234567',
            'email'     => 'operator@operator.com',
            'status'    => '1',
            'password'  => bcrypt('123456'),
        ]);

        $user->assignRole('admin');
 
    }
}
