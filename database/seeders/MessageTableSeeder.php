<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $m = new Message;
        $m->id = 1;
        $m->user_id = 1;
        $m->title = 'New campaign';
        $m->content = 'My team and I have come up with a new marketing strategy that I believe needs review.';
        $m->dept_focus = 'Management';
        $m->save();

        Message::factory()->count(20)->create();
    }
}
