<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    
    /**
     * @throws Exception
     */
    public function run()
    {
        foreach (\App\Models\Type::all() as $type) {
            $type->delete();
        }
        foreach (\App\Models\User::all() as $user) {
            $user->delete();
        }
        foreach (\App\Models\Role::all() as $role) {
            $role->delete();
        }
        $expert_role = \App\Models\Role::create([
            'name' => 'expert',
            'slug' => 'expert'
        ]);
    
        foreach ([
                     'Diş Hekimi',
                     'Avukat',
                     'Yazılımcı',
                     'Doktor',
                     'Veteriner Hekim',
                     'Yoga Hocası',
                     'Fitness Hocası'
                 ] as $type) {
            $type = \App\Models\Type::create([
                'name' => $type
            ]);
            
           
            factory(\App\Models\User::class, 5)->create(['type_id' => $type->id, 'is_expert' => 1])->each(function (
                $user
            ) use ($expert_role) {
                $profile = factory(\App\Models\Profile::class, 1)->create(['user_id' => $user->id]);
                $user->roles()->attach($expert_role);
            });
        }
        
        $user_role = \App\Models\Role::create([
            'name' => 'user',
            'slug' => 'user'
        ]);
        
        factory(\App\Models\User::class, 10)->create(['type_id' => $type->id, 'is_expert' => 0])->each(function ($user
        ) use ($user_role) {
            $profile = factory(\App\Models\Profile::class, 1)->create(['user_id' => $user->id]);
            $user->roles()->attach($user_role);
        });
    }
}
