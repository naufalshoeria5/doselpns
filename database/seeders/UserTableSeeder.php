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
            'password'  => bcrypt('ControlLife!12'),
        ]);

        $user->assignRole('super-admin');
 
    }
}
