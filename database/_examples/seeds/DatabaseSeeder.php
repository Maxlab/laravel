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
        DB::table('password_resets')->truncate();
        DB::table('projects')->truncate();
        DB::table('payments')->truncate();
        DB::table('tags')->truncate();
        DB::table('taggables')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $this->call(UsersTableSeeder::class);
        
        $tags = factory(\App\Models\Tag::class, 10)->create();
        factory(App\Models\User::class, 10)->create()->each(function ($user) use ($tags) {
            $projects = factory(\App\Models\Project::class, 5)->create(['user_id' => $user->id]);
            foreach ($projects as $project) {
                $project->tags()->attach($tags->random(1));
                factory(\App\Models\Payment::class, random_int(10, 30))
                    ->create(['project_id' => $project->id])->each(function (\App\Models\Payment $payment) use ($tags) {
                        $payment->tags()->attach($tags->random(1));                            
                    });
            }
        });
    }
}
