<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dbModelRolesName = config('permission.table_names.model_has_roles');

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => config('app.admin.email'),
            'password' => bcrypt(config('app.admin.password')),
        ]);

        DB::table($dbModelRolesName)->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);
    }
}
