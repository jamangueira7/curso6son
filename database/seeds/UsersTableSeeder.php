<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\User::class,1)->create([
            'email' =>'joao1@joao.com',
            'account_id'=>1,
        ]);

        factory(\App\User::class,1)->create([
            'email' =>'joao2@joao.com',
            'account_id'=>2,
        ]);
    }
}
