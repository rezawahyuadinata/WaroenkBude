<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin =[
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('rezawahyu123'),
            ],
        ];
        foreach($Admin as $key => $value) {
            admin::create($value);
        }
    }
}
