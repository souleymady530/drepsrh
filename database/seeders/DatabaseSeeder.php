<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        


        DB::table('users')->insert([
            'pseudo'=>"Admin530",
            'email'=>"Admin530@gmail.com",
            'password'=>Hash::make('jht100cds%Francs'),
            'type'=>1,
            ]);

            DB::table('users')->insert([
                'pseudo'=>"Dreps530",
                'email'=>"Dreps530@gmail.com",
                'password'=>Hash::make('jht100cds%Francs'),
                'type'=>3,
                ]);




                DB::table('users')->insert([
                    'pseudo'=>"Dpeps530",
                    'email'=>"Dpeps530@gmail.com",
                    'password'=>Hash::make('jht100cds%Francs'),
                    'type'=>4,
                    ]);




                    DB::table('users')->insert([
                        'pseudo'=>"Ministere530",
                        'email'=>"Ministere530@gmail.com",
                        'password'=>Hash::make('jht100cds%Francs'),
                        'type'=>2,
                        ]);

                        DB::table('users')->insert([
                            'pseudo'=>"Ets530",
                            'email'=>"Ets530@gmail.com",
                            'password'=>Hash::make('jht100cds%Francs'),
                            'type'=>0,
                            ]);
           
    }
}
