<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
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
        factory(\App\Models\Type::class, 15)->create();
    }
}
