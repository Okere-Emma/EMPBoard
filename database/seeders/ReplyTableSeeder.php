<?php

namespace Database\Seeders;

use App\Models\Reply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $r = new Reply;
        $r->id = 1;
        $r->content = 'The marketing team have received your campaign and will get back to you before the end of the week with a review';
        $r->save();
    }
}
