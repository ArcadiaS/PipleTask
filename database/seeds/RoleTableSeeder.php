<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev_role = new \App\Models\Role();
        $dev_role->slug = 'Expert';
        $dev_role->name = 'expert';
        $dev_role->save();
        $dev_role = new \App\Models\Role();
        $dev_role->slug = 'User';
        $dev_role->name = 'user';
        $dev_role->save();
    }
}
