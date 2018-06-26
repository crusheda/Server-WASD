<?php

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
        // //
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'faisal@admin.id',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name'     => 'ceo',
            'email'    => 'ceo@admin.id',
            'password' => Hash::make('ceo'),
            'role' => 'ceo',
        ]);
        DB::table('users')->insert([
            'name'     => 'admin2',
            'email'    => 'dani@admin.id',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
    }
}
