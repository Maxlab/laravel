<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('galleries')->truncate();
        DB::table('photos')->truncate();
        DB::table('password_resets')->truncate();
        DB::table('gallery_photo')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $this->call(UsersTableSeeder::class);
    }
}
