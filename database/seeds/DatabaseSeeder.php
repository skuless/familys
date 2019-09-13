<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Provider\zh_TW\DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $dateString = Carbon::now();

        DB::table('users')->insert([
            [
                // Création du compte admin pour les tests
                'name' => "Admin Universel",
                'email' => 'Universel@admin.com',
                'role' => 'Super Admin',
                'created_at' => $dateString,
                'password' => bcrypt('H8uVtP538cvH5Tw')
            ]
        ]);
    }
}
