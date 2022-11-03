<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $magazines= [
            ['title'=>'Total Film', 'number'=>'1'],
            ['title'=>'Empire', 'number'=>'3'],
            ['title'=>'Premier', 'number'=>'2'],
        ];

        foreach($magazines as $magazine){
            DB::table('magazines')->insert(
                [
                    'title'=>$magazine['title'],
                    'number'=>$magazine['number'],
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ]
            );
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
