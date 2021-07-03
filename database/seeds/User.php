<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
            'email'=>'luuvanlam34@gmail.com',
            'password'=>bcrypt(12456),
            'vaitro' =>'admin'
        ],
        [
            'email'=>'luuvanlam25@gmail.com',
            'password'=>bcrypt(12456),
            'vaitro' =>'user'
        ],
    
    ];
        DB::table('user')->insert($data);
    }
    
}
