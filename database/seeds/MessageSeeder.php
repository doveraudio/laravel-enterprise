<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Factory;
class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=2;$i<=51;$i++){
            $m = new App\Notifications\Message();
            $m->From = "admin@admin.com";
            $m->To = App\User::find($i)->email;
            $m->Sender = "Admin";
            $m->Subject = $faker->sentence;
            $m->Body = $faker->text;
            $u = App\User::find($i);
            $u->notify($m);
        }
        
    }
}
