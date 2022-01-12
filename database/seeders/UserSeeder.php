<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Sumaiya Sumu";
        $user->username = "sumu";
        $user->phone_no = "01789531474";
        $user->email = "sumaiya@gmail.com";
        $user->password = Hash::make('12345678');
        $user->designation_id = 1;
        $user->save();
    }
}
