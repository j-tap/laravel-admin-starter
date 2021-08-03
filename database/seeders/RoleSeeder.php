<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dbRolesName = config('permission.table_names.roles');
        $guardName = config('fortify.guard');

        $table = DB::table($dbRolesName);

        $table->insert([
            'name' => 'admin',
            'guard_name' => $guardName,
        ]);

        $table->insert([
            'name' => 'user',
            'guard_name' => $guardName,
        ]);
    }
}
