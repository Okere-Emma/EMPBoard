<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $u = new User;
        $u->id = 1;
        $u->name = 'Emmanuel Okere';
        $u->email = 'emmanuel.okere2010@gmail.com';
        $u->password = 'avatar88';
        $u->save();

        $user = User::factory()->count(5)->hasEmployee()->hasMessages(4)->create();
    }
}
