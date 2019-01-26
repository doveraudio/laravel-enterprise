<?php

use Illuminate\Database\Seeder;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Activity::class)->make([
            'name'=>'Access','slug'=>'access','description'=>'Access Activity'
            ])->save();
            
        factory(App\Activity::class)->make([
            'name'=>'Create','slug'=>'create','description'=>'Create Activity'
            ])->save();

        factory(App\Activity::class)->make([
            'name'=>'Read','slug'=>'read','description'=>'Read Activity'
            ])->save();
        
        factory(App\Activity::class)->make([
            'name'=>'Update','slug'=>'update','description'=>'Update Activity'
            ])->save();
        
        factory(App\Activity::class)->make([
            'name'=>'Delete','slug'=>'delete','description'=>'Delete Activity'
            ])->save();
        
        }
}
