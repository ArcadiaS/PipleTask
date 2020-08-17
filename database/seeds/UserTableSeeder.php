<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Models\Type::all() as $type){
            $type->delete();
        }
        foreach (\App\Models\User::all() as $user){
            $user->delete();
        }
        foreach (['Diş Hekimi', 'Avukat', 'Yazılımcı', 'Doktor', 'Veteriner Hekim', 'Yoga Hocası', 'Fitness Hocası'] as $type){
            $type = \App\Models\Type::create([
                'name' => $type
            ]);
            factory(\App\Models\User::class, 5)->create(['type_id' => $type->id, 'is_expert' => 1])->each(function($user){
                $profile = factory(\App\Models\Profile::class, 1)->create(['user_id' => $user->id]);
            });
        }
    
        factory(\App\Models\User::class, 10)->create(['type_id' => $type->id, 'is_expert' => 0])->each(function($user){
            $profile = factory(\App\Models\Profile::class, 1)->create(['user_id' => $user->id]);
        });
    }
}
